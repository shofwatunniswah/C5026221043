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
Route::get('/introduction-to-html', function () {
    return view('tugas1');
});
Route::get('/introduction-to-css', function () {
    return view('tugas2');
});
Route::get('/progress-bar', function () {
    return view('tugas3');
});
Route::get('/my-linktree', function () {
    return view('tugas4');
});
Route::get('/landing-page', function () {
    return view('tugas5');
});
Route::get('/validation-form', function () {
    return view('tugas6');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('/blog', function () {
    return view('home');
});
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});
//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@shop');
Route::get('/keranjangbelanja/batal/{ID}','App\Http\Controllers\BelanjaController@batal');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\BelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');

Route::get('/pensil','App\Http\Controllers\PensilController@listPensil');
Route::get('/pensil/tambah','App\Http\Controllers\PensilController@tambah');
Route::post('/pensil/store','App\Http\Controllers\PensilController@store');
Route::get('/pensil/hapus/{kode}','App\Http\Controllers\PensilController@hapus');
Route::get('/pensil/view/{kode}','App\Http\Controllers\PensilController@view');
Route::get('/pensil/cari','App\Http\Controllers\PensilController@cari');
Route::get('/pensil/edit/{kode}','App\Http\Controllers\PensilController@edit');
Route::post('/pensil/update/{kode}','App\Http\Controllers\PensilController@update');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/chat','App\Http\Controllers\ChatController@index');
