<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama, menggunakan tampilan dari folder 'pages'
Route::get('/', function () {
    return view('pages.beranda');
});

// Rute untuk halaman 'beranda', menggunakan tampilan dari folder 'pages'
Route::get('/beranda', function () {
    return view('pages.beranda');
});

// Rute untuk halaman 'profil', pastikan 'profil.blade.php' ada di folder yang sesuai
Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tupoksi', function () {
    return view('pages.tupoksi');
});

Route::get('/proker', function () {
    return view('pages.proker');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/aspirasi', function () {
    return view('pages.aspirasi');
});
