<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/example', [App\Http\Controllers\HomeController::class, 'example'])->name('example');
Route::get('/item', [App\Http\Controllers\HomeController::class, 'item'])->name('item');
Route::get('/claim', [App\Http\Controllers\HomeController::class, 'claim'])->name('claim');