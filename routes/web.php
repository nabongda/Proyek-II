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

Route::get('produk', 'ProdukController@shop')->name('produk');

Route::get('/kategori/{id}','ProdukController@listByCat')->name('kategori');

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

Route::get('kontak', function () {
    return view('content.kontak');
})->name('kontak');

// Route::get('home_user', function () {
//     return view('content.home_user');
// })->name('home_user');

Route::get('keranjang', function () {
    return view('content.keranjang');
})->name('keranjang');

Route::get('login', 'AuthController@getLogin')->name('login');

Route::post('login', 'AuthController@postLogin')->name('postlogin');

Route::get('daftar', 'AuthController@getDaftar')->name('daftar');

Route::post('daftar', 'AuthController@postDaftar')->name('postdaftar');

Route::get('halut', 'AuthController@index')->name('home_user');

Route::get('logout', 'AuthController@logout')->name('logout');