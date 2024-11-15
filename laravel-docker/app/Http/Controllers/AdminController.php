<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use App\Mail\AppointmentCancelled;
use Alert;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_appointment()
    {
        // Fetch all bookings and sort them
        $bookings = Booking::orderByRaw("CASE 
                                                WHEN status = 'pending' THEN 0 
                                                WHEN status = 'confirmed' THEN 1 
                                                ELSE 2 
                                            END")
                            ->orderBy('date', 'asc') // Sort by nearest date
                            ->get();

        // Pass the bookings variable to the view
        return view('admin.view_appointment', compact('bookings'));
    }

    public function confirmBooking($id)
    {
        // Find the booking by ID
        $booking = Booking::find($id);
        if (!$booking) {
            return redirect()->route('bookings')->with('error', 'Booking not found.');
        }
        
        // Update booking status or perform any confirmation logic
        $booking->status = 'confirmed'; // Example of updating the status
        $booking->save();

        Mail::to($booking->email)->send(new AppointmentConfirmation($booking));

        Alert::success('Success!', 'You confirmed the appointment');
        return redirect()->route('view_appointment');
    }

    public function declineBooking($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'canceled'; // Update status to declined
            $booking->save();
        }
        
        Mail::to($booking->email)->send(new AppointmentCancelled($booking));

        return redirect()->route('view_appointment')->with('success', 'Booking declined successfully!');
    }


    public function create_product()
    {
        return view('admin.create_product');
    }

    public function add_product(Request $request)
    {
        $data = new Product;

        $data->product_title = $request->title;
        $data->description = $request->description;
        $data->product_type = $request->type;
        $data->price = $request->price;
        $images = $request->images;

        if($images) {
            $imagename=time().'.'.$images->getClientOriginalExtension();

            $request->images->move('product', $imagename);

            $data->images=$imagename;
        }

        $data ->save();

        Alert::success('Success!', 'You added a product.
        ');

        return redirect()->back();
    }

    public function view_product()
    {
        $products = Product::all();
        return view('admin.view_product', compact('products'));

    }

    public function delete_product($id)
    {
        $products = Product::find($id);
        
        $products->delete();
        
        return redirect()->back();
    }

    public function update_product($id)
    {
        $products = Product::find($id);
        
        return view ('admin.update_product', compact('products'));
    }

    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->product_title = $request->title;
        $data->description = $request->description;
        $data->product_type = $request->type;
        $data->price = $request->price;
        $images = $request->images;
        if($images) {
            $imagename=time().'.'.$images->getClientOriginalExtension();
            $request->images->move('product', $imagename);
            $data->images=$imagename;
        }
        $data->save();

        Alert::success('Success!', 'You updated the product successfully');

        return redirect('view_product');
    }
    public function adminDashboard()
    {
        // Fetch appointment data grouped by country and order by total appointments in descending order
        $countryAppointments = DB::table('bookings')
            ->select('country', DB::raw('count(id) as total_appointments'))
            ->groupBy('country')
            ->orderBy('total_appointments', 'desc')
            ->limit(5) // Limit to top 5 countries
            ->get();
        
        // Prepare labels and data for the pie chart
        $plabels = [];
        $pdata = [];
        foreach ($countryAppointments as $appointment) {
            $plabels[] = $appointment->country;
            $pdata[] = $appointment->total_appointments;
        }

        // Pass the variables to the view
        return view('admin.dashboard', compact('plabels', 'pdata'));
    }
}
