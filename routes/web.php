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
    return view('dashboard');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/add-page', function () {
    return view('add-page');
});

Route::get('/login', function () {
    return view('authuntification.login');
});

Route::get('/register', function () {
    return view('authuntification.register');
});

Route::get('/forget-password', function () {
    return view('authuntification.forget-password');
});