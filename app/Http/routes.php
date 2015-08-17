<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// route yang butuh authentication
Route::group(['middleware' => ['auth']], function() {
    Route::get('barang/index', 'BarangController@index');
    Route::get('barang/create', 'BarangController@create');
    Route::post('barang/store', 'BarangController@store');
    Route::get('barang/destroy/{id}', 'BarangController@destroy');
    Route::get('barang/edit/{id}', 'BarangController@edit');
    Route::post('barang/update/{id}', 'BarangController@update');

    Route::get('anggota/index', 'AnggotaController@index');
    Route::get('anggota/create', 'AnggotaController@create');
    Route::post('anggota/store', 'AnggotaController@store');
    Route::get('anggota/destroy/{id}', 'AnggotaController@destroy');
    Route::get('anggota/edit/{id}', 'AnggotaController@edit');
    Route::post('anggota/update/{id}', 'AnggotaController@update');

    Route::get('pesanan/index', 'PesananController@index');
    Route::get('pesanan/create', 'PesananController@create');
    Route::post('pesanan/store', 'PesananController@store');
    Route::get('pesanan/destroy/{id}', 'PesananController@destroy');
    Route::get('pesanan/edit/{id}', 'PesananController@edit');
    Route::post('pesanan/update/{id}', 'PesananController@update');
    Route::get('pesanan/show/{id}', 'PesananController@show');

    Route::post('pesanan/diterima/{id}', 'PesananController@diterima');
    Route::post('pesanan/menunggu/{id}', 'PesananController@menunggu');
    Route::post('pesanan/ditolak/{id}', 'PesananController@ditolak');

    Route::get('pengadaan/index', 'PengadaanController@index');
    Route::get('pengadaan/create', 'PengadaanController@create');
    Route::post('pengadaan/store', 'PengadaanController@store');
    Route::get('pengadaan/destroy/{id}', 'PengadaanController@destroy');
    Route::get('pengadaan/edit/{id}', 'PengadaanController@edit');
    Route::post('pengadaan/update/{id}', 'PengadaanController@update');
    Route::get('pengadaan/show/{id}', 'PengadaanController@show');

    Route::get('guest_barang/index', 'UserController@barang');
    Route::get('guest_anggota/index', 'UserController@anggota');
    Route::get('guest_password/index', 'UserController@passwordEdit');
    Route::post('guest_password/update/{id}', 'UserController@passwordUpdate');
});

//Custom Auth
//Route::get('auth', 'CustomAuthController@index');
//Route::post('auth', 'CustomAuthController@authenticate');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
