<?php

use App\Models\Food;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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
Route::put('/admin/complete-order/{order}', [OrderController::class, 'update']);
Route::get('/admin/add-foods', [FoodController::class, 'create']);
Route::get('/admin/edit-food/{food}', [FoodController::class, 'edit']);
Route::get('/admin/view-foods', [FoodController::class, 'index']);
Route::get('/admin/delete-food/{food}', [FoodController::class, 'delete']);
Route::post('/admin/update-food/{food}', [FoodController::class, 'update']);
Route::post('/admin/delete-food/{food}', [FoodController::class, 'destroy']);
Route::get('/admin/order-history', [OrderController::class, 'order_history']);
Route::get('/admin/pending-orders', [OrderController::class, 'pending_orders']);
Route::get('/admin/all-students', [UserController::class, 'all_students']);
Route::get('/admin/all-admins', [UserController::class, 'all_admins']);


Route::post('/add-food', [FoodController::class, 'store']);
Route::post('/student/add-to-cart', [CartController::class, 'store']);
Route::get('/contact-us', function () {
    return view('Student.contact-us');
});

Route::get('/student/food-zone', function () {
    return view('Student.food-zone', ['foods' => Food::all()]);
});

Route::get('/student/cart', [CartController::class, 'index']);
Route::post('/student/payment', [CartController::class, 'payment']);
Route::delete('/student/delete-food/{food}', [CartController::class, 'destroy']);
Route::post('/student/confirm-payment', [CartController::class, 'confirm_payment']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/student/sign-up', [AuthController::class, 'student_sign_up']);
// Route::get('/admin/sign-up', [AuthController::class, 'admin_sign_up']);
Route::post('/student/sign-up', [AuthController::class, 'store']);
// Route::post('/admin/sign-up', [AuthController::class, 'store']);

Route::get('/admin/sign-in', [AuthController::class, 'admin_sign_in']);
Route::post('/admin/sign-in', [AuthController::class, 'login']);

Route::get('/student/sign-in', [AuthController::class, 'student_sign_in']);
Route::post('/student/sign-in', [AuthController::class, 'login']);



