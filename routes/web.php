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
Route::resource('homepage', 'HomepageController');
Route::get('/', function () {
    return view('content.home');
})->name('home');

Route::get('produk', function () {
    return view('content.produk');
})->name('produk');

Route::get('produk_pria', function () {
    return view('content.produk_pria');
})->name('produk_pria');

Route::get('produk_wanita', function () {
    return view('content.produk_wanita');
})->name('produk_wanita');

Route::get('produk_anak', function () {
    return view('content.produk_anak');
})->name('produk_anak');

Route::get('produk_sepatu', function () {
    return view('content.produk_sepatu');
})->name('produk_sepatu');

Route::get('produk_tas', function () {
    return view('content.produk_tas');
})->name('produk_tas');

Route::get('produk_aksesoris', function () {
    return view('content.produk_aksesoris');
})->name('produk_aksesoris');

Route::get('produk_topi', function () {
    return view('content.produk_topi');
})->name('produk_topi');

Route::get('produk_gelang', function () {
    return view('content.produk_gelang');
})->name('produk_gelang');

Route::get('login', function () {
    return view('content.login');
})->name('login');

Route::get('daftar', function () {
    return view('content.daftar');
})->name('daftar');

Route::get('kontak', function () {
    return view('content.kontak');
})->name('kontak');

Route::get('home_user', function () {
    return view('content.home_user');
})->name('home_user');

Route::get('keranjang', function () {
    return view('content.keranjang');
})->name('keranjang');