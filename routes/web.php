<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Middleware\CekLogin;
use Illuminate\Auth\Events\Login;
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
    
    // Stock Barang
    Route::resource('stockbarang', 'StockBarangController');
    Route::get('stockbarang/{stockbarang}/detail', 'StockBarangController@detail')->name('stockbarang.detail');
    Route::put('stockbarang/{stockbarang}/aktif', 'StockBarangController@aktif')->name('stockbarang.aktif');
});
