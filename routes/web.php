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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-pegawai', 'App\Http\Controllers\PegawaiController@index')->name('data-pegawai');

Route::get('/create-pegawai', 'App\Http\Controllers\PegawaiController@create')->name('create-pegawai');
Route::get('/edit-pegawai/{id}', 'App\Http\Controllers\PegawaiController@edit')->name('edit-pegawai');
Route::post('/simpan-pegawai', 'App\Http\Controllers\PegawaiController@store')->name('simpan-pegawai');
Route::post('/update-pegawai/{id}', 'App\Http\Controllers\PegawaiController@update')->name('update-pegawai');
Route::get('/delete-pegawai/{id}', 'App\Http\Controllers\PegawaiController@destroy')->name('delete-pegawai');
