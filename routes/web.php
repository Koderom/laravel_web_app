<?php

use App\Http\Controllers\UserController;
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

Route::view('/', 'Login.Login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('iniciar-sesion');
Route::view('/home', 'Home.Home')->middleware('auth')->name('home');
