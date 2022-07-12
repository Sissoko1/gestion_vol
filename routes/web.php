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

Route::get('/listevol', function () {
    return view('listevol');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/air', function () {
    return view('air');
});

Route::get('/sky', function () {
    return view('sky');
});

Route::get('/ethiopian', function () {
    return view('ethiopian');
});

Route::get('/detail', function () {
    return view('detail');
});
