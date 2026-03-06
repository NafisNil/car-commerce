<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');  
Route::resource('cars', CarController::class);

Route::get('signup', [SignupController::class, 'create'])->name('signup');
Route::get('login', [LoginController::class, 'create'])->name('login');

