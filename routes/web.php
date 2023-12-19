<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\PaymentMomo;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [ClothesController::class,'index']);
Route::get('/detail/{id}',[ClothesController::class,'show']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[LoginController::class,'register_view']);
Route::post('/login',[LoginController::class,'login']);
Route::post('/register',[LoginController::class,'register']);
Route::get('/logout',[LoginController::class,'logout']);


//Cart

Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('/discount/apply', [CartController::class, 'applyCoupon'])->name('cart.apply.coupon');
Route::post('/discount/removce', [CartController::class, 'removeCoupon'])->name('cart.remove.coupon');



//Checkout
Route::get('/checkout', [checkoutController::class, 'checkout_view'])->name('checkout.view');
Route::get('/order/create',[checkoutController::class,'order']);
Route::post('/momo', [PaymentMomo::class, 'paymentMomo'])->name('cart.momo');
Route::get('/success', [PaymentMomo::class, 'success_order'])->name('checkout.success');


//Profile
Route::get('/profile', [ProfileController::class, 'view'])->name('profile.view');
Route::post('/update-profile', [ProfileController::class, 'update'])->name('profile.update');



