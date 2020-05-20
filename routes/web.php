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

Route::get('/', 'TokoController@index2');

//auth
Route::get('/login', 'UserController@login');
Route::post('/login/action', 'UserController@loginAction');

Route::get('/signup', 'UserController@signup');
Route::post('/signup/action', 'UserController@signupAction');

Route::get('/signout', 'GudangController@signOut');
Route::get('/sign-out', 'TokoController@signOut');

//admin
Route::get('/admin', 'GudangController@index');
Route::get('/admin/add/post', 'GudangController@gudangAddPost');
Route::post('/admin/add/post/save', 'GudangController@gudangAddSave');
Route::get('/admin/edit/{id}', 'GudangController@gudangEditPost');
Route::post('/admin/{id}/update', 'GudangController@gudangEditPostSave');
Route::get('/admin/detail/{id}', 'GudangController@gudangDetailPost');
Route::get('/admin/delete/produk/{id}', 'GudangController@gudangDeletePost');
Route::get('/admin/search', 'GudangController@gudangSearch');

//kategori
Route::get('/admin/kategori', 'KategoriController@index');
Route::get('/admin/kategori/add', 'KategoriController@kategoriAddPost');
Route::post('/admin/kategori/add/post/save', 'KategoriController@kategoriAddSave');
Route::get('/admin/kategori/edit/{id}', 'KategoriController@kategoriEditPost');
Route::post('/admin/kategori/{id}/update', 'KategoriController@kategoriEditPostSave');
Route::get('/admin/kategori/delete/{id}', 'KategoriController@kategoriDeletePost');
Route::get('/admin/kategori/search', 'GudangController@gudangSearchKategori');

//user
Route::get('/user', 'TokoController@index');
Route::get('/user/cari/produk', 'TokoController@cari');
Route::get('/user/detail/{id}', 'TokoController@detail');
Route::get('/user/kategori/laptop', 'TokoController@kategori');
Route::get('/user/kategori/smartphone', 'TokoController@kategoriHp');
Route::get('/user/kategori/aksesoris', 'TokoController@kategoriAcc');
Route::get('/index', 'TokoController@index2');
Route::get('/user/beli/{id}', 'TokoController@addToCart');
Route::get('/user/keranjang', 'TokoController@keranjang');
Route::get('/user/keranjang/delete/{id}', 'TokoController@keranjangDeletePost');
Route::post('/user/nota', 'TokoController@checkout');
Route::get('/user/transaksi', 'TokoController@transaksi');
Route::get('/nota', 'TokoController@nota');
Route::get('/download/nota/{id}', 'TokoController@downloadNota');

// chart report
Route::get('/laporan', 'LaporanController@viewChartCategory');
Route::get('/chart/report', 'LaporanController@calculateReport');

// Route::post('/keranjang/nota', 'TokoController@checkOut');

// Route::get('/download/nota/{id}', 'ProdukController@downloadNota');
