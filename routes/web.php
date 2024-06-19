<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
Route::resource('user', \App\Http\Controllers\UserController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/booking', [BookingController::class, 'show'])->name('booking');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/rentals', function () {
        return view('rentals');
    })->name('rentals');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('signup', [AuthController::class, 'registration'])->name('signup');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('dashboard', [AuthController::class, 'dashboard']);

