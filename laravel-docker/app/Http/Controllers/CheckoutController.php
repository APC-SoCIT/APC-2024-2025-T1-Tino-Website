<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    // Display the checkout form
    public function showCheckout()
    {
        // Retrieve cart items for the current session
        $cartItems = Cart::where('session_id', session()->getId())->get();

        // Redirect if the cart is empty
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty. Please add items before proceeding.');
        }

        // Calculate total amount
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Pass cart items and total amount to the view
        return view('checkout', [
            'cartItems' => $cartItems,
            'totalAmount' => $totalAmount,
        ]);
    }

    // Process the checkout and create an order

    public function processCheckout(Request $request)
    {
        // Validate the input from the form
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:15',
            'shipping_address' => 'required|string|max:500',
        ]);
    
        // Retrieve the total amount from the form (this should come from your cart calculations)
        $totalAmount = $request->input('total_amount');
    
        // Retrieve cart items for the current session (using session ID)
        $cartItems = Cart::where('session_id', session()->getId())->get();
    
        // Check if the cart is empty
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }
    
        // Create the order in the 'orders' table
        $order = new Order();
        $order->customer_name = $validatedData['customer_name'];
        $order->customer_email = $validatedData['customer_email'];
        $order->customer_phone = $validatedData['customer_phone'];
        $order->shipping_address = $validatedData['shipping_address'];
        $order->status = 'pending'; // Assuming it's pending until payment is made
        $order->payment_status = 'unpaid'; // Assuming unpaid until payment is processed
        $order->total_amount = $totalAmount;
        
    
        // Now, move cart content to the 'orders' table
        foreach ($cartItems as $cartItem) {
            // Assuming the 'orders' table can handle these fields or you have a separate 'order_items' table
            $order->product_id = $cartItem->product_id;    
        }

        $order->save(); // Save the order

        // Optional: Clear the cart after moving items to the order
        Cart::where('session_id', session()->getId())->delete();
    
        // Redirect to a confirmation page
        return redirect()->route('checkout-complete');
    }    

}
