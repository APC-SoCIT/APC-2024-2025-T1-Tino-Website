<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;

$url = config('app.url');
URL::forceRootUrl($url);

// Public Routes

//main/welcome page
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
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/create_product', [AdminController::class, 'create_product']);
    Route::post('/add_product', [AdminController::class, 'add_product']);
    Route::get('/view_product', [AdminController::class, 'view_product']);
    Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
    Route::get('/update_product/{id}', [AdminController::class, 'update_product']);
    Route::post('/edit_product/{id}', [AdminController::class, 'edit_product']);
});

// Booking Routes (no authentication required)
Route::post('/add_booking/{id}', [AppointmentController::class, 'add_booking']);

// Authentication Routes
require __DIR__.'/auth.php';
