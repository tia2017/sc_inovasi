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
// Route::get('/dashboard', function() {
// 	return view('dashboard.index');
// });
Route::get('/inovasi', function() {
	return view('inovasi.index');
});
Route::get('/tambah-inovasi', function() {
	return view('tambahInovasi.index');
});
// Route::get('/daftarRole', function() {
// 	return view('daftarRole.index');
// });
// Route::get('/buatAkun', function() {
// 	return view('buatAkun.index');
// });


// Route::get('/profile', function() {
// 	return view('profile.index');
// });


// Route::get('/login','loginController@index');
//Route::get('/dashboard','dashboardController@index');
Route::get('/inovasi','inovasiController@index');

Route::get('/tambah-inovasi','tambahInovasiController@create');
Route::post('/tambah-inovasi','tambahInovasiController@store');
Route::get('/detail-inovasi', 'detailInovasiController@index');

Route::get('/profile', 'profileController@index');
Route::get('/daftarRole', 'daftarUserController@index');
Route::get('/buatAkun', 'buatAkunController@index');


route::get('/profile', 'profileController@index');
route::get('/daftarRole', 'daftarUserController@index');

//try
// route::resource('users','userController');

Route::get('/users', 'userController@index');
route::get('/users/tambah', 'userController@create');
route::post('/users/store', 'userController@store');


Route::get('/buatAkun', 'buatAkunController@index');
Route::post('/buatAkun/store', 'buatAkunController@store');


Route::get('/users/edit/{id}','userController@edit');


//login Coba
Route::post('/login-post', 'loginController@loginPost');
Route::get('/dashboard', 'loginController@index');
Route::get('/login', 'loginController@login');


// Route::get('/logout', 'User@logout');

Route::post('/login-post', 'loginController@loginPost');


