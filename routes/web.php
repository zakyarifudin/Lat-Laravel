<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return 'Hello World';
});

Route::get('about', function () {
    return view('about');
});

Route::get('pesan', function () {
    return view('pesan');
});

Route::post('pesan/kirim', function () {
    return view('pesan_kirim');
});

Route::get('template', function () {
 return view('layouts.master');
});

Route::get('coba1', function () {
 return view('coba1');
});

Route::get('coba2', function () {
 return view('coba2');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

