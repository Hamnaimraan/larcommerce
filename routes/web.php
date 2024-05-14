<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Define the route for the landing page
Route::get('/index', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/prod-desc', function () {
    return view('prod-desc');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
use App\Http\Controllers\LoginController;
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login.submit');
use App\Http\Controllers\RegistrationController;

Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');
use App\Http\Controllers\CheckoutController;

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.submit');




