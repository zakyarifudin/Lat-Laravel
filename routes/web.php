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

