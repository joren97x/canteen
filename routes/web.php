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
    return view('Student.index');
});

Route::get('/about', function () {
    return view('Student.about');
});

Route::get('/add-food', [FoodController::class, 'create']);


Route::post('/add-food', [FoodController::class, 'store']);
Route::post('/add-to-cart', [CartController::class, 'store']);
Route::get('/contact-us', function () {
    return view('Student.contact-us');
});

Route::get('/food-zone', function () {
    return view('Student.food-zone', ['foods' => Food::all()]);
});

Route::get('/cart', function () {
    return view('Student.cart');
});

Route::get('/student/sign-up', [AuthController::class, 'student_sign_up']);
Route::get('/admin/sign-up', [AuthController::class, 'admin_sign_up']);
Route::get('/student/sign-in', [AuthController::class, 'student_sign_in']);
Route::get('/admin/sign-in', [AuthController::class, 'admin_sign_in']);
Route::post('/student/sign-up', [AuthController::class, 'student_store']);
Route::post('/student/sign-in', [AuthController::class, 'student_login']);
Route::post('/admin/sign-up', [AuthController::class, 'admin_store']);
Route::post('/admin/sign-in', [AuthController::class, 'admin_login']);


