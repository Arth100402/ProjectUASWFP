<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('utama');
});

Route::resource('product',ProductController::class);
Route::resource('user',UserController::class);

Route::middleware(['auth'])->group(function(){
    Route::get('checkout',[UserController::class,'checkout'])->name('checkout');
    Route::post('submitcheckout',[UserController::class,'submitcheckout'])->name('submitcheckout');
});

Route::get('cart',[ProductController::class,'cart']);
Route::get('product-page/addcart/{id}',[ProductController::class,'addToCart'])->name('addToCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
