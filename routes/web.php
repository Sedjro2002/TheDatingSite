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

Route::get('/signInUp', function () {
    return view('signInUp');
});

Route::get('/questionnary', function () {
    return view('questionnary');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/matching', function () {
    return view('matching');
});