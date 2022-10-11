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

Route::get('/home', function () {
    return view('dashboard.home');
})->middleware(['auth', 'verified']);

Route::get('/tfa', function () {
    return view('auth.tfa');
})->middleware(['auth', 'verified']);

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

//  Route::get('/forgot-password', function () {
//      return view('auth.forgot-password');
//  })->name('forgotPassword');

// Route::get('/verify-email', function () {
//     return view('auth.verify-email');
// })->name('verifyEmail');

// Route::get('/home', function () {
//     return view('layouts.dashboard.home');
// })->middleware('auth')->name('home');
