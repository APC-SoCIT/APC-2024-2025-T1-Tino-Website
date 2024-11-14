<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCartNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if cart is empty
        if (Cart::count() === 0) {
            // Redirect back with a message if cart is empty
            return redirect()->back()->with('error', 'Your cart is empty. Please add items to your cart before proceeding.');
        }
        
        return $next($request);
    }
}
