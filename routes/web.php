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
Route::get('/daftarRole', function() {
	return view('daftarRole.index');
});
<<<<<<< HEAD
Route::get('/buatAkun', function() {
	return view('buatAkun.index');
});
=======
>>>>>>> 59eab1be91a2ba575f7a527c62a895577f08bdd1

Route::get('/daftarRole', function() {
	return view('daftarRole.index');
});


Route::get('/login','loginController@index');
Route::get('/dashboard','dashboardController@index');
Route::get('/inovasi','inovasiController@index');
Route::get('/tambah-inovasi','tambahInovasiController@create');
Route::post('/tambah-inovasi','tambahInovasiController@store');
Route::get('/detail-inovasi', 'detailInovasiController@index');
<<<<<<< HEAD
route::get('/profile', 'profileController@index');
route::get('/daftarRole', 'daftarRoleController@index');
route::get('/buatAkun', 'buatAkunController@index');
=======
<<<<<<< HEAD
Route::get('/profile', 'profileController@index');
Route::get('/daftarRole', 'daftarRoleController@index');

=======
route::get('/profile', 'profileController@index');
route::get('/daftarRole', 'daftarRoleController@index');
>>>>>>> c8f9980f054db1a016d56b7a014923b34236472f
>>>>>>> 59eab1be91a2ba575f7a527c62a895577f08bdd1




// Route::resource('inovasi', 'inovasiController');
