<?php

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

Auth::routes();

// Route for admin dashboard & dashboard page
Route::get('/home', 'HomeController@index')->name('home');

// agar ketika registrasi kembali ke halam login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

// Route for kategori
Route::resource('kategori', 'KategoriController');

// Route for dashboard
Route::resource('dashboard', 'DashboardController');




