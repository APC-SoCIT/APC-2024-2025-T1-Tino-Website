<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email input
        $request->validate(['email' => 'required|email|unique:subscribers,email']);

        // Save the subscriber email to the database
        $subscriber = Subscriber::create(['email' => $request->email]);

        // Send confirmation email
        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

        // Redirect back with success message
        return back()->with('success', 'Thank you for subscribing!');
    }
}
