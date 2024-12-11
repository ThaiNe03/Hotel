<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Admin
use App\HTTP\Controllers\Admin\UserController;
use App\HTTP\Controllers\Admin\CateRoomController;
use App\HTTP\Controllers\Admin\ServiceController;
use App\HTTP\Controllers\Admin\ProductController;
use App\Http\Controllers\Staff\BlogController;

// Staff
use App\Http\Controllers\Staff\RoomController;
use App\Models\Blog;

// Main
use App\Http\Controllers\Main\CustomerController;
use App\Http\Controllers\RentalDetailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/admin/login',[UserController::class,'loginAdmin']);
// Admin
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::get('/logout',[UserController::class,'logout']);
    // Profile
    Route::get('/profile',[UserController::class,'index']);
    Route::post('/update',[UserController::class,'updateAdmin']);
    // Staff
    Route::get('/list-staff',[UserController::class,'staffList']);
    Route::post('/create-staff',[UserController::class,'staffCreate']);
    Route::delete('/delete-staff/{id}',[UserController::class,'destroy']);
    // Category room
    Route::get('/list-cate-room',[CateRoomController::class,'index']);
    Route::post('/create-cate-room',[CateRoomController::class,'store']);
    Route::get('/edit-cate-room/{id}',[CateRoomController::class,'edit']);
    Route::post('/edit-cate-room/{id}',[CateRoomController::class,'update']);
    Route::delete('/delete-cate-room/{id}',[CateRoomController::class,'destroy']);
    // Service
    Route::get('/list-service',[ServiceController::class,'index']);
    Route::post('/create-service',[ServiceController::class,'store']);
    Route::delete('/delete-service/{id}',[ServiceController::class,'destroy']);
    // Product
    Route::get('/list-product',[ProductController::class,'index']);
    Route::post('/create-product',[ProductController::class,'store']);
    Route::get('/edit-product/{id}',[ProductController::class,'edit']);
    Route::post('/edit-product/{id}',[ProductController::class,'update']);
    Route::delete('/delete-product/{id}',[ProductController::class,'destroy']);
});

// Staff
Route::post('/staff/login',[UserController::class,'loginStaff']);
Route::prefix('staff')->middleware('auth:sanctum')->group(function () {
    Route::get('/logout',[RoomController::class,'logout']);
    // Room
    Route::get('/list-room', [RoomController::class, 'getData']);
    Route::post('/create-room',[RoomController::class, 'store']);
    Route::get('/edit-room/{id}',[RoomController::class,'edit']);
    Route::put('/edit-room/{id}',[RoomController::class, 'update']);
    Route::delete('/delete-room/{id}', [RoomController::class, 'destroy']);
    // Product
    Route::get('/list-product',[ProductController::class,'index']);
    Route::put('/change-status', [ProductController::class, 'change']);
    // Blog
    Route::get('/list-blog',[BlogController::class,'index']);
    Route::post('/create-blog',[BlogController::class,'store']);
    Route::get('/edit-blog/{id}',[BlogController::class,'edit']);
    Route::put('/edit-blog/{id}',[BlogController::class,'update']);
    Route::delete('/delete-blog',[BlogController::class,'destroy']);
    // Chi tiết thuê phòng
    Route::get('/list-rental-detail', [RentalDetailController::class, 'getData']);
    Route::post('/create-rental-detail', [RentalDetailController::class, 'store']);
    Route::get('/edit-rental-detail/{id}', [RentalDetailController::class, 'edit']);
    Route::get('/edit-rental-detail/{id}', [RentalDetailController::class, 'update']);
    Route::get('/delete-rental-detail', [RentalDetailController::class, 'destroy']);
    // Tạo đặt phòng
    
});

Route::post('/register', [CustomerController::class, 'register']);
Route::post('/login', [CustomerController::class, 'login']);

// Main
Route::get('/list-room', [RoomController::class, 'getData']);
Route::get('/edit-room/{id}',[RoomController::class,'edit']);
Route::get('/list-service',[ServiceController::class,'index']);
Route::get('/list-product',[ProductController::class,'index']);

// Main sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout',[CustomerController::class,'logout']);
    Route::post('/booking',[CustomerController::class,'booking']);
});
