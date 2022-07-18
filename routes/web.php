<?php

use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\MaintenanceController;
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

// Home
Route::get('/', 'HomeController')->name("Home");

// Login
Route::get('/login', function () {
    return view('inventory.autentikasi.login');
});

// Data Barang
Route::resource('databarang', 'DataBarangController');
Route::get('databarang/{databarang}/detail', 'DataBarangController@detail')->name('databarang.detail');
Route::resource('databarang/{id}/maintenance', 'MaintenanceController');

// Stock Barang
Route::resource('stockbarang', 'StockBarangController');
Route::get('stockbarang/{stockbarang}/detail', 'StockBarangController@detail')->name('stockbarang.detail');
Route::put('stockbarang/{stockbarang}/aktif', 'StockBarangController@aktif')->name('stockbarang.aktif');
