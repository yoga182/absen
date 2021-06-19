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
    return view('pegawai');
});

Route::resource('pegawai','PegawaiController')->except(['show','update']);

use App\Http\Controllers\ExportController;
Route::get('/export','ExportController@export_excel');