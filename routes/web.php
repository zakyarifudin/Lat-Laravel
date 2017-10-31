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