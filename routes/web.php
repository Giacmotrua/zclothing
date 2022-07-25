<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PolicyController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/add-cart/{id}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/update-cart',[CartController::class, 'update'])->name('cart.update');
Route::delete('/remove-cart',[CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/order', [CartController::class, 'order'])->name('order');
Route::get('/tracking', [CartController::class, 'tracking'])->name('tracking');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
Route::get('/product-detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/product-search', [ProductController::class, 'search'])->name('product.search');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-message', [ContactController::class, 'message'])->name('contact.message');

Route::get('/policy-return', [PolicyController::class, 'return'])->name('policy.return');
Route::get('/policy-transport', [PolicyController::class, 'transport'])->name('policy.transport');


