<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Cart;

class ProductController extends Controller
{
    public function showShop()
    {
        // Fetch products from the database
        $products = Product::all(); // or use ->paginate() for paginated results

        // Get the session ID
        $session_id = session()->getId();

        // Get the count of items in the cart for the current session
        $count = Cart::where('session_id', $session_id)->count();

        // Pass the products and cart count to the view
        return view('shop', compact('products', 'count')); // Assuming the view is named 'shop.blade.php'
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
        $products = Product::where('product_type', 'JACKETS')->get();

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
    public function show($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id); // Use findOrFail to handle not found cases
        
        // Return the product details view with the product data
        return view('shop.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        // Retrieve the product ID from the URL
        $product_id = $id;

        // Get the session ID
        $session_id = session()->getId();

        // Retrieve size and quantity from the request
        $size = $request->input('size');
        $quantity = $request->input('quantity', 1); // Default to 1 if not provided

        // Check if the cart already exists for the session and product
        $cart = Cart::where('session_id', $session_id)
                     ->where('product_id', $product_id)
                     ->first();

        if ($cart) {
            // If cart exists, update the quantity
            $cart->quantity += $quantity;
            $cart->save();
        } else {
            // Create a new Cart instance
            $data = new Cart;

            // Store the session ID
            $data->session_id = $session_id;

            // Store the product ID
            $data->product_id = $product_id;

            // Store the size and quantity
            $data->size = $size;
            $data->quantity = $quantity;

            // Save the cart data
            $data->save();
        }

        // Redirect back to the previous page
        return redirect()->route('shop');
    }
    public function getCartCount()
    {
        // Get the session ID
        $session_id = session()->getId();

        // Count the total items in the cart for this session
        $cartCount = Cart::where('session_id', $session_id)->sum('quantity');

        // Return the count
        return response()->json(['count' => $cartCount]);
    }

    public function showCart()
    {
        $session_id = session()->getId();
        // Retrieve cart items based on session_id
        $cartItems = Cart::where('session_id', $session_id)->get();

        // Return the cart view inside the 'shop' folder
        return view('shop.cart', compact('cartItems'));
    }

    public function delete_cart($id)
    {
        // Retrieve the cart item based on the session ID and product ID
        $sessionId = session()->getId();
        $cartItem = Cart::where('session_id', $sessionId)
                        ->where('product_id', $id)
                        ->first();
    
        if ($cartItem) {
            $cartItem->delete(); // Delete the cart item
            // Optionally, you can add a success message to the session
            session()->flash('success', 'Product deleted successfully');
        } else {
            // Optionally, you can add an error message to the session
            session()->flash('error', 'Product not found in the cart');
        }
    
        return redirect()->back();
    }
    

}
