<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
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
}
