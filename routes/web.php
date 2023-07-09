<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\HomeController;
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

Route::resource('brand', BrandController::class)->middleware('auth');
Route::resource('category',CategoryController::class)->middleware('auth');
Route::resource('type',TypeController::class)->middleware('auth');
Route::resource('transaction',TransactionController::class)->middleware('auth');

Route::get('mytransaction',[TransactionController::class, 'mytransaction'])->name('transaction.mytransaction');
Route::get('product/bybrand/{id}',[ProductController::class, 'bybrand'])->name('product.bybrand');
Route::get('product/bytype/{id}',[ProductController::class, 'bytype'])->name('product.bytype');
Route::get('product/bycategory/{id}',[ProductController::class, 'bycategory'])->name('product.bycategory');

Route::resource('product', ProductController::class)->middleware('auth');
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::get('profileedit', [UserController::class, 'profileedit'])->name('profile.edit');
Route::put('profileupdate', [UserController::class, 'profileupdate'])->name('profile.update');
Route::resource('user', UserController::class);

Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');
Route::get('submitcheckout/{sum}', [TransactionController::class, 'submit_front'])->name('submitcheckout');
Route::get('cart', [ProductController::class, 'cart']);
Route::get('product-page/addcart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');

Route::get('laporan', [TransactionController::class, 'indexLaporan'])->name('laporan.index');
Route::get('laporan/produkterlaris', [TransactionController::class, 'produkTerlaris'])->name('transaction.produkTerlaris');
Route::get('laporan/kategoriterlaris', [TransactionController::class, 'kategoriTerlaris'])->name('transaction.kategoriTerlaris');
Route::get('laporan/brandterlaris', [TransactionController::class, 'brandTerlaris'])->name('transaction.brandTerlaris');
Route::get('laporan/tipeterlaris', [TransactionController::class, 'tipeTerlaris'])->name('transaction.tipeTerlaris');
Route::get('laporan/pembeliterbanyak', [TransactionController::class, 'pembeliTerbanyak'])->name('transaction.pembeliTerbanyak');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});
