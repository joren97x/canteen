<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FoodController;
use App\Models\Food;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Customer.index');
});

Route::get('/about', function () {
    return view('Customer.about');
});

Route::get('/add-food', function () {
    return view('Manager.add-food');
});

Route::post('/add-food', [FoodController::class, 'store']);
Route::post('/add-to-cart', [CartController::class, 'store']);
Route::get('/contact-us', function () {
    return view('Customer.contact-us');
});

Route::get('/food-zone', function () {
    return view('Customer.food-zone', ['foods' => Food::all()]);
});

Route::get('/cart', function () {
    return view('Customer.cart');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::post('/sign-up', [AuthController::class, 'sign_up']);
Route::post('/sign-in', [AuthController::class, 'sign_in']);


