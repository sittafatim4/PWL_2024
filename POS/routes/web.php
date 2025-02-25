<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/home', [HomeController::class, 'index']);

Route::get('/food-beverage', function () {
    return view('food-beverage');
});

Route::get('/user/profile', [UserController::class, 'profile']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/sales', [SalesController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
