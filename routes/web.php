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
Route::get('/questionnary', function () {
    return view('questionnary');
})->name('questionnary');

Route::post('/profil', [App\Http\Controllers\UserInfoController::class, 'storeInfo'])->name('storeInfo');



Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth'])->name('profil');

require __DIR__.'/auth.php';
