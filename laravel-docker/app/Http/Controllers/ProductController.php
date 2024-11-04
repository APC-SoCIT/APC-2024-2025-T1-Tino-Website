<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product; // Add this line to import the Product model


class ProductController extends Controller
{
    public function showShop()
    {
        // Fetch products from the database
        $products = Product::all(); // or use ->paginate() for paginated results

        // Pass the products to the view
        return view('shop', compact('products')); // Assuming the view is named 'shop.blade.php'
    }
    public function showShoes()
    {
        // Fetch only products of type 'SHOES'
        $products = Product::where('product_type', 'SHOES')->get();

        // Return the view with the filtered products
        return view('shop.shoes', compact('products')); // Assuming you have a dedicated view for shoes
    }
    public function showJackets()
    {
        // Fetch only products of type 'JACKETS'
        $products = Product::where('product_type', 'JACKET')->get();

        // Return the view with the filtered products
        return view('shop.jackets', compact('products')); // Assuming you have a dedicated view for jackets
    }
    public function showAccessories()
    {
        $products = Product::where('product_type', 'ACCESSORIES')->get();
        return view('shop.accessories', compact('products'));
    }

    public function showGiftCards()
    {
        $products = Product::where('product_type', 'GIFT CARDS')->get();
        return view('shop.gift_cards', compact('products'));
    }

}
