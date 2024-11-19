<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookingController;
// belong to admin
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\GalleryController;
//Admin
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\AdminController;


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
//homemadmin
Route::get('/', [MainController::class,'index'])->name('home');
Route::get('/room', [MainController::class,'room'])->name('room');
Route::get('/about-us', [MainController::class,'aboutus'])->name('aboutus');
Route::get('/booking', [MainController::class,'booking'])->name('booking');
Route::get('/blog', [MainController::class,'blog'])->name('blog');
Route::get('/menu', [MainController::class,'menu'])->name('menu');
Route::get('/detail', [MainController::class,'detail'])->name('detail');
Route::get('/login', [MainController::class,'login'])->name('login');
Route::get('/logout', [MainController::class,'logout'])->name('logout');
//Route::get('/SignUp', [MainController::class,'dangki'])->name('dangki');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logon',[AdminController::class,'logon'])->name('logon');
Route::post('/logon',[AdminController::class,'postLogon'])->name('admin.logon');

Route::prefix('admin')->middleware('admin')->group(function () {
  Route::get('/', [DashBoardController::class, 'index'])->name('homeadmin');
  Route::resource('categories', CategoriesController::class);
  Route::resource('products', ProductsController::class);
  Route::resource('details', DetailsController::class);
  Route::resource('gallery', GalleryController::class);
});

Route::get('/choose/room', [BookingController::class,'choose1'])->name('choose1');
Route::get('/choose/room/service', [BookingController::class,'choose2'])->name('choose2');
Route::get('/choose/reservation', [BookingController::class,'choose3'])->name('choose3');
Route::get('/choose/confirmation', [BookingController::class,'choose4'])->name('choose4');