<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('login', 'AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', 'Admin\DashboardController@index')->name('admin');
        Route::get('admin/kendaraan', 'Admin\KendaraanController@index')->name('kendaraan');
        Route::get('admin/pegawai', 'Admin\PegawaiController@index')->name('pegawai');
        Route::get('admin/pinjam', 'Admin\PinjamController@index')->name('pinjam');
        Route::get('admin/pinjam/tambah', 'Admin\PinjamController@create')->name('pinjam.create');
        Route::post('admin/pinjam/store', 'Admin\PinjamController@store')->name('pinjam.store');
    });
    Route::group(['middleware' => ['cek_login:timacc']], function () {
        Route::get('timacc', 'Timacc\DashboardController@index')->name('timacc');
        Route::get('timacc/pinjam', 'Timacc\PinjamController@index')->name('pinjam');
        Route::get('timacc/pinjam/edit/{id}', 'Timacc\PinjamController@edit')->name('pinjam.edit');
        Route::post('timacc/pinjam/update/{id}', 'Timacc\PinjamController@update')->name('pinjam.update');
    });
});
