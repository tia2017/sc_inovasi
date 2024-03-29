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
    return view('welcome');
});
Route::get('/dashboard', function() {
	return view('dashboard.index');
});
Route::get('/inovasi', function() {
	return view('inovasi.index');
});
Route::get('/tambah-inovasi', function() {
	return view('tambahInovasi.index');
});
Route::get('/login','loginController@index');
Route::get('/dokumentasi','dokumentasiController@index');
Route::get('/keluhan','keluhanController@index');
Route::get('/register', 'registerController@index');
Route::get('/dashboard','dashboardController@index');
Route::get('/inovasi','inovasiController@index');
Route::get('/tambah-inovasi','tambahInovasiController@create');
Route::post('/tambah-inovasi','tambahInovasiController@store');
Route::get('/inovasi/detail/{detail_info}', 'inovasiController@detail');
Route::get('/profile', 'profileController@index');
Route::get('/inovasi/hapus/{detail_info}','inovasiController@hapus');
Route::get('/inovasi/edit/{detail_info}','inovasiController@edit');
Route::post('/inovasi/edit','inovasiController@store');
Route::get('/inovasi/cari', 'inovasiController@search');
// Route::resource('inovasi', 'inovasiController');
