<?php

use App\Http\Controllers\AuthControlller;
use App\Http\Controllers\ProductController;
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


// Login
Route::get('/login',[AuthControlller::class,'login'])->name('login');
Route::POST('/loginuser',[AuthControlller::class,'loginuser'])->name('loginuser');
Route::get('/logout',[AuthControlller::class,'logout'])->name('logout');

Route::get('/',[ProductController::class,'index'])->name('index')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/tambahproduct',[ProductController::class,'tambahproduct'])->name('tambahproduct');
    Route::POST('/insertdata',[ProductController::class,'insertdata'])->name('insertdata');
    Route::get('/tampilkanproduct/{id}',[ProductController::class,'tampilkanproduct'])->name('tampilkanproduct');
    Route::POST('/editdata/{id}',[ProductController::class,'editdata'])->name('editdata');
    Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct'])->name('deleteproduct');
    Route::get('/produk-exportpdf', [ProductController::class, 'exportpdf'])->name('exportpdf_produk');
});






