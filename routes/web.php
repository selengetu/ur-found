<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Laravel's default Auth routes
Auth::routes();

// Middleware for guests only, if user is logged in, redirect to the home page.
Route::middleware('guest')->group(function () {
    // The login route is defined within Auth::routes(), no need to explicitly define it here.
    // You can add other routes here that should only be accessible to non-authenticated users.
});

// Middleware for authenticated users, if user is not logged in, redirect to the login page.
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/example', [App\Http\Controllers\HomeController::class, 'example'])->name('example');
    Route::get('/item', [App\Http\Controllers\HomeController::class, 'item'])->name('item');
    Route::get('/claim', [App\Http\Controllers\HomeController::class, 'claim'])->name('claim');
    Route::get('/report', [App\Http\Controllers\HomeController::class, 'report'])->name('report');
    Route::get('/safety', [App\Http\Controllers\HomeController::class, 'safety'])->name('safety');
    Route::post('/storeReport', [App\Http\Controllers\HomeController::class, 'storeReport'])->name('storeReport');
    // Add other routes here that require the user to be authenticated.
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
