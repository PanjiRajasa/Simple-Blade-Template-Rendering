<?php

use Illuminate\Support\Facades\Route;

// route root dan home mengarah ke views yang sama
Route::view('/', 'home');
Route::view('/home', 'home');

// route isi berita
Route::get('/home/isi_berita', function () {
    return view('isi_berita');
});

// route profile
Route::get('/profile', function () {
    return view('profile');
});

// route visi-misi
Route::get('/visi-misi', function () {
    return view('visi-misi');
});

// route cctv
Route::get('/cctv', function () {
    return view('cctv');
});

// route pemerintahan
Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

// route lpm
Route::get('/lpm', function () {
    return view('lpm');
});

// route kim
Route::get('/kim', function () {
    return view('kim');
});