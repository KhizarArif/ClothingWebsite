<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::middleware(['throttle:20,1'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');

    Route::get('/register', [RegisterController::class, "register"])->name("register");
});

Route::get('/', function () {
    return view('layouts.header');
});
Route::get('/add_to_cart', function () {
    return view('addToCart');
});

Route::get('/shopping_cart', function () {
    return view('shoppingCart');
});
