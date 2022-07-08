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

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/masuk', function () {
    return view('masuk');
});