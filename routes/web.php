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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/cars', 'CarController@index');

Auth::Routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Pembayaran/{kendaraan_id}', 'TransaksiController@show')->name('transaksi.edit');