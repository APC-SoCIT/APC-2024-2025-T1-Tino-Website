<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Booking;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_appointment()
    {
        // Fetch all bookings
        $bookings = Booking::all(); 

        // Pass the bookings variable to the view
        return view('admin.view_appointment', compact('bookings'));
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
