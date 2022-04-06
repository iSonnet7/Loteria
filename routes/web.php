<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('Login', [LoginController::class, 'create'])->name('login.index');

Route::post('Login', [LoginController::class, 'store'])->name('login.store');

Route::get('Logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('google-redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');

Route::get('google-callback', [SocialiteController::class, 'callback'])->name('google.callback');

Route::get('Register', [RegisterController::class, 'create'])->name('register.index');

Route::post('Register', [RegisterController::class, 'store'])->name('register.store');

Route::get('Register-Social', [RegisterController::class, 'social'])->name('register.social');