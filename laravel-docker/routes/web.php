<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::get('/create_product', [AdminController::class, 'create_product']);

Route::post('/add_product', [AdminController::class, 'add_product']);

Route::get('/view_product', [AdminController::class, 'view_product']);

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

Route::post('/edit_product/{id}', [AdminController::class, 'edit_product']);

require __DIR__.'/auth.php';
