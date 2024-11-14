<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CartCountMiddleware;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;


$url = config('app.url');
URL::forceRootUrl($url);

// Public Routes

Route::middleware([CartCountMiddleware::class])->group(function () {
    // Main/welcome page
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/bespoke', function () {
        return view('bespoke');
    })->name('bespoke');

    Route::prefix('shop')->group(function () {
        Route::get('/', [ProductController::class, 'showShop'])->name('shop');
        Route::get('/shoes', [ProductController::class, 'showShoes'])->name('shop.shoes');
        Route::get('/jackets', [ProductController::class, 'showJackets'])->name('shop.jackets');
        Route::get('/accessories', [ProductController::class, 'showAccessories'])->name('shop.accessories');
        Route::get('/gift-cards', [ProductController::class, 'showGiftCards'])->name('shop.gift_cards');
        Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
    
        // Add to cart route (use POST for adding items to the cart)
        Route::post('add_cart/{id}', [ProductController::class, 'add_cart'])->name('add.cart');
    
        // Route for displaying the cart
        Route::get('/cart', [ProductController::class, 'showCart'])->name('cart');
        Route::post('/delete_cart/{id}', [ProductController::class, 'delete_cart'])->name('delete.cart');

    });
    

    // Other Routes
    Route::get('/our-house', function () {
        return view('our_house');
    })->name('our_house');

    Route::get('/map', function () {
        return view('map');
    })->name('map');

    Route::get('/appointment', function () {
        return view('appointment');
    })->name('appointment');

    Route::get('/history', function () {
        return view('history');
    })->name('history');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    
    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');
    
    Route::get('/article', function () {
        return view('article');
    })->name('article');
    
});

// Admin Routes with auth middleware applied
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');

    // Appointment Routes
    Route::get('/view_appointment', [AdminController::class, 'view_appointment'])->name('view_appointment');
    Route::get('/bookings', [BookingController::class, 'getBookings'])->name('bookings');
    Route::get('/bookings/{id}', [BookingController::class, 'getBookingDetails'])->name('booking.details');
    Route::post('/confirm_booking/{id}', [AdminController::class, 'confirmBooking'])->name('confirm.booking');
    Route::post('/decline_booking/{id}', [AdminController::class, 'declineBooking'])->name('decline.booking');
    
    // Product Routes
    Route::get('/create_product', [AdminController::class, 'create_product'])->name('create.product');
    Route::post('/add_product', [AdminController::class, 'add_product'])->name('add.product');
    Route::get('/view_product', [AdminController::class, 'view_product'])->name('view.product');
    Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete.product');
    Route::get('/update_product/{id}', [AdminController::class, 'update_product'])->name('update.product');
    Route::post('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit.product');
});

// Booking Routes (no authentication required)
Route::post('add_booking', [BookingController::class, 'store'])->name('add_booking');

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

// Display the checkout form with cart items
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');

Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('processCheckout');

// Checkout complete page
Route::get('/complete', function () {
    return view('checkout-complete');
})->name('checkout-complete');

Route::get('pay', [PaymentController::class, 'pay']);
Route::get('success', [PaymentController::class, 'success'])->name('success');
Route::get('cancel', function () {
    return redirect()->route('checkout')->with('error', 'Payment was canceled');
})->name('cancel');


// Authentication Routes
require __DIR__.'/auth.php';
