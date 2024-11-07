<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartCountMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Get the current session ID
        $session_id = session()->getId();

        // Count the items in the cart for this session
        $count = Cart::where('session_id', $session_id)->count();

        // Share the count with all views
        view()->share('count', $count);

        return $next($request);
    }
}
