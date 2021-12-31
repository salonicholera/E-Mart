<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/product/{slug}', [App\Http\Controllers\ProductController::class, 'details'])->name('product.details');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/destroy/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/buynow', [App\Http\Controllers\CartController::class, 'buyNow'])->name('buynow');

Route::group(['middleware' => ['auth', 'user']], function () {

    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard');

     // Account
     Route::get('account/profile', '\App\Http\Controllers\AccountController@profile')->name('account.profile');
     Route::put('account/profile/update', '\App\Http\Controllers\AccountController@updateProfile')->name('account.profile.update');
     Route::put('account/password/update', '\App\Http\Controllers\AccountController@updatePassword')->name('account.password.update');

     
    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

    Route::post('/order/create', [App\Http\Controllers\OrderController::class, 'createOrder'])->name('order.create');
    Route::get('/order/history', [App\Http\Controllers\OrderController::class, 'orderHistory'])->name('order.history');
    Route::get('/order/success/{id}', [App\Http\Controllers\OrderController::class, 'orderSuccess'])->name('order.success');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

});


Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin', 'as'=>'admin.'], function () {

    Route::get('/dashboard', '\App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');

    // Account
    Route::get('account/profile', '\App\Http\Controllers\Admin\AccountController@profile')->name('account.profile');
    Route::put('account/profile/update', '\App\Http\Controllers\Admin\AccountController@updateProfile')->name('account.profile.update');
    Route::put('account/password/update', '\App\Http\Controllers\Admin\AccountController@updatePassword')->name('account.password.update');

    Route::resource('user', '\App\Http\Controllers\Admin\UserController');
    Route::put('user/{id}/password/update', 'Chatloop\User\Http\Controllers\UserController@updatePassword')->name('user.password.update');

    Route::resource('category', '\App\Http\Controllers\Admin\CategoryController');

    Route::resource('product', '\App\Http\Controllers\Admin\ProductController');

    Route::get('order/history', '\App\Http\Controllers\Admin\OrderController@orderHistory')->name('order.history');


    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

});