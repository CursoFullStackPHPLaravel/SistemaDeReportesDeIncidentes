<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicosController;

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
})->name('home');

Route::resource('tecnicos', TecnicosController::class);

// Vistas
Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('register');
Route::view('/sesion', 'sesion')->name('sesion');
