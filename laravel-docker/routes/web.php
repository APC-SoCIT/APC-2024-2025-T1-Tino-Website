<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

$url = config('app.url');
URL::forceRootUrl($url);

// Public Routes

// Main/welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/bespoke', function () {
    return view('bespoke');
})->name('bespoke');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/our-house', function () {
    return view('our_house');
})->name('our_house');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');

// Admin Routes with auth middleware applied
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    
    // Appointment Routes
    Route::get('/view_appointment', [AdminController::class, 'view_appointment'])->name('view_appointment');
    Route::get('/bookings', [BookingController::class, 'getBookings']); // Get all bookings for FullCalendar
    Route::get('/bookings/{id}', [BookingController::class, 'getBookingDetails']); // To fetch details for a specific booking
    Route::post('/confirm_booking/{id}', [BookingController::class, 'confirmBooking'])->name('confirm.booking');
    Route::post('/decline_booking/{id}', [BookingController::class, 'declineBooking'])->name('decline.booking');

    // Product Routes
    Route::get('/create_product', [AdminController::class, 'create_product']);
    Route::post('/add_product', [AdminController::class, 'add_product']);
    Route::get('/view_product', [AdminController::class, 'view_product']);
    Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
    Route::get('/update_product/{id}', [AdminController::class, 'update_product']);
    Route::post('/edit_product/{id}', [AdminController::class, 'edit_product']);
});


// Booking Routes (no authentication required)
Route::post('add_booking', [BookingController::class, 'store'])->name('add_booking');

// Authentication Routes
require __DIR__.'/auth.php';
