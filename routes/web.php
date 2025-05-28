<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/konten', function () {
    return view('konten');
});

Route::get('/detailkonten', function () {
    return view('detailkonten');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});


Route::get('/daftarbarang', function () {
    return view('daftarbarang');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

