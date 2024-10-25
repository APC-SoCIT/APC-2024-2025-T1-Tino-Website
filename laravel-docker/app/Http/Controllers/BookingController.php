<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
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
            'number_of_people' => $validatedData['number_of_people'],
            'additional_info' => $validatedData['additional_info'],
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Booking added successfully!');
    }
}
