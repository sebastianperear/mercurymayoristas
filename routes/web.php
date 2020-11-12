<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/tickets', 'TicketsController', ['except' => 'show', 'create', 'edit']);

// Cart
Route::resource('/carts', 'Cart\CartController', ['except' => 'show', 'create', 'edit']);

Route::get('/cart', 'Cart\CartController@view')->name('cart');

// Products
Route::get('/categoria/{categoria}/{subcategoria}', 'Products\CategoryController@index')->name('category');
Route::get('/productos/{id}/{nombre}', 'Products\ProductController@view')->name('product');





