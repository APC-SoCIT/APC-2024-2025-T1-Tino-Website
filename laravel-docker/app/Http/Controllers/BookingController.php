<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status');
        
        $bookings = Booking::when($status, function($query) use ($status) {
            return $query->where('status', $status);
        })->get();
        
        return view('admin.view_appointment', compact('bookings'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'appointment_type' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'preferred_channel' => 'nullable|array',
            'category_of_interest' => 'nullable|array',
            'number_of_people' => 'required|integer',
            'additional_info' => 'nullable|string',
        ]);

        // Check if the time slot is already booked
        $existingBooking = Booking::where('date', $validatedData['date'])
            ->where('time', $validatedData['time'])
            ->first();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'This time slot is already booked.');
        }

        // Store the validated data
        Booking::create([
            'appointment_type' => $validatedData['appointment_type'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'country' => $validatedData['country'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'preferred_channel' => implode(',', $validatedData['preferred_channel'] ?? []), // Convert array to string
            'category_of_interest' => implode(',', $validatedData['category_of_interest'] ?? []), // Convert array to string
            'number_of_people' => $validatedData['number_of_people'],
            'additional_info' => $validatedData['additional_info'],
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Booking added successfully!');
    }

    public function confirmBooking($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'confirmed'; // Update status to confirmed
            $booking->save();
        }
        
        return redirect()->back();
    }


    public function declineBooking($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'canceled'; // Update status to declined
            $booking->save();
        }
        
        return redirect()->back()->with('success', 'Booking declined successfully!');
    }
    
    public function getBookings()
    {
        // Fetch bookings and format data for FullCalendar
        $bookings = Booking::where('status', 'confirmed')->get()->map(function ($booking) {
            return [
                'title' => $booking->appointment_type, // Only display appointment type
                'start' => $booking->date, // Use only date (without time) for FullCalendar
                'extendedProps' => [
                    'first_name' => $booking->first_name,
                    'last_name' => $booking->last_name,
                    'country' => $booking->country,
                    'phone' => $booking->phone,
                    'email' => $booking->email,
                    'preferred_channel' => $booking->preferred_channel,
                    'category_of_interest' => $booking->category_of_interest,
                    'number_of_people' => $booking->number_of_people,
                    'additional_info' => $booking->additional_info,
                ]
            ];
        });
        return response()->json($bookings);
    }

}
