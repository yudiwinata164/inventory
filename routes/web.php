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
Route::middleware('guest')->group(function () {
    // Login
Route::get('/login', 'LoginController@index')->name("Login");
Route::post('/login/auth', 'LoginController@autentikasi')->name("AuthLogin");
});

Route::middleware("auth")->group(function () {
    //Logout
    Route::post('/logout', 'LoginController@logout')->name("Logout");
    
    // Home
    Route::get('/', 'HomeController')->name("Home");
    
    // Data Barang
    Route::resource('databarang', 'DataBarangController');
    Route::get('databarang/{databarang}/detail', 'DataBarangController@detail')->name('databarang.detail');
    Route::resource('databarang/{id}/maintenance', 'MaintenanceController');
    Route::resource('databarang/{id}/mutasi', 'MutasiController');
    
    // Stock Barang
    Route::resource('stockbarang', 'StockBarangController');
    Route::get('stockbarang/{stockbarang}/detail', 'StockBarangController@detail')->name('stockbarang.detail');
    Route::get('stockbarang/{stockbarang}/mutasi', 'StockBarangController@mutasiForm')->name('stockbarang.mutasi');
    Route::post('stockbarang/{stockbarang}/mutasi/move', 'StockBarangController@mutasi')->name('stockbarang.mutasimove');
});
