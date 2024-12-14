<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomRegisterController;



// Route for the index page
// Route for the index page (handled by BlogController@index)
Route::get('/', [BlogController::class, 'index'])->name('index');


// Route for the custom registration form
Route::get('/custom-register', function () {
    return Inertia::render('CustomRegister'); // Assuming you have a `CustomRegister` Vue component
})->name('custom.register');

// Route for handling custom registration
Route::post('/custom-register', [CustomRegisterController::class, 'store'])->name('custom.register.store');




Route::get('/admin', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

