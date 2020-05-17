<?php

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
    return view('pages.frontend.home');
});

Route::get('/cart', function () {
    return view('pages.frontend.cart');
});

Route::get('/dashboard', function () {
    return view('pages.frontend.dashboard');
})->name('dashboard');

Route::get('/orders', function () {
    return view('pages.frontend.orders');
});

Route::get('/wishlist', function () {
    return view('pages.frontend.wishlist');
});

Route::get('/settings', function () {
    return view('pages.frontend.settings');
});

Route::get('/addresses', function () {
    return view('pages.frontend.addresses');
});

Route::get('/catalog-list', function () {
    return view('pages.frontend.catalog-list');
});

Route::get('/catalog-grid', function () {
    return view('pages.frontend.catalog-grid');
});

Route::get('/categories', function () {
    return view('pages.frontend.categories');
});

Route::get('/product', function () {
    return view('pages.frontend.product');
});

Route::get('/checkout', function () {
    return view('pages.frontend.checkout');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');

require 'backend.php';
