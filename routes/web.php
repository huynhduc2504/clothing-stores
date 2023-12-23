<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\PaymentMomo;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CatelogriesController;
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

Route::get('/', [ClothesController::class,'index']);
Route::get('/detail/{id}',[ClothesController::class,'show']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[LoginController::class,'register_view']);
Route::post('/login',[LoginController::class,'login'])->name('login');
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

//Admin
Route::get('/admin', [AdminController::class, 'index']);

//Product
Route::get('/admin/product', [AdminController::class, 'products_list']);
Route::get('/admin/product/add',[ClothesController::class,'create']);
Route::post('/admin/product/add', [ClothesController::class, 'store']);
Route::get('/admin/product/edit/{id}', [ClothesController::class, 'edit']);
Route::put('/admin/product/update/{id}', [ClothesController::class, 'update']);
Route::delete('/admin/product/delete/{id}', [ClothesController::class, 'destroy']);

//Customer
Route::get('/admin/customer', [AdminController::class, 'customers_list']);
Route::get('/admin/customer/edit/{id}', [CustomersController::class, 'edit']);
Route::put('/admin/customer/update/{id}', [CustomersController::class, 'update']);
Route::delete('/admin/customer/delete/{id}', [CustomersController::class, 'destroy']);

//Size
Route::get('/admin/size', [AdminController::class, 'sizes_list']);
Route::get('/admin/size/add', function () {
    return view('admin.add-size');
});
Route::post('/admin/size/add', [SizeController::class, 'store']);
Route::get('/admin/size/edit/{id}', [SizeController::class, 'edit']);
Route::put('/admin/size/update/{id}', [SizeController::class, 'update']);
Route::delete('/admin/size/delete/{id}', [SizeController::class, 'destroy']);

//Color
Route::get('/admin/color', [AdminController::class, 'colors_list']);
Route::get('/admin/color/add', function () {
    return view('admin.add-color');
});
Route::post('/admin/color/add', [ColorController::class, 'store']);
Route::get('/admin/color/edit/{id}', [ColorController::class, 'edit']);
Route::put('/admin/color/update/{id}', [ColorController::class, 'update']);
Route::delete('/admin/color/delete/{id}', [ColorController::class, 'destroy']);

//Category
Route::get('/admin/category', [AdminController::class, 'catelogries_list']);
Route::get('/admin/category/add', function () {
    return view('admin.add-category');
});
Route::post('/admin/category/add', [CatelogriesController::class, 'store']);
Route::get('/admin/category/edit/{id}', [CatelogriesController::class, 'edit']);
Route::put('/admin/category/update/{id}', [CatelogriesController::class, 'update']);
Route::delete('/admin/category/delete/{id}', [CatelogriesController::class, 'destroy']);

//Order
Route::get('/admin/order', [AdminController::class, 'orders_list']);
Route::delete('/admin/order/delete/{id}', [OrderController::class, 'destroy']);

//Detail
Route::get('/admin/detail/{id}', [AdminController::class, 'detail_orders_list']);


