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
