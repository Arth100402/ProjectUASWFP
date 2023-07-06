<?php

use App\Http\Controllers\BrandController;
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
})->middleware('auth');

Route::resource('brand', BrandController::class);
Route::resource('user',CategoryController::class);
Route::resource('user',TypeController::class);

Route::resource('product', ProductController::class)->middleware('auth');
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::get('profileedit', [UserController::class, 'profileedit'])->name('profile.edit');
Route::put('profileupdate', [UserController::class, 'profileupdate'])->name('profile.update');
Route::resource('user', UserController::class);

Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');
Route::post('submitcheckout', [UserController::class, 'submitcheckout'])->name('submitcheckout');
Route::get('cart', [ProductController::class, 'cart']);
Route::get('product-page/addcart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('transaction/showDataAjax/', 'TransactionController@showAjax')-> name('transaction.showAjax');
