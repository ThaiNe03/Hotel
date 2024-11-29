<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Admin\UserController;

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
    Route::get('/profile',[UserController::class,'index']);
    Route::get('/list-staff',[UserController::class,'staffList']);
    Route::post('/update',[UserController::class,'updateAdmin']);
    Route::post('/create-staff',[UserController::class,'staffCreate']);
    Route::post('/create-cate-room',[UserController::class,'cateRoomCreate']);
});
// Staff
Route::prefix('staff')->middleware('auth:sanctum')->group(function () {
    
});

