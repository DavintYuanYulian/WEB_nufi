<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;


Route::get('/', function () {
    return view('layouts.beranda');
});

Route::get('/profil', function () {
    return view('layouts.profil');
});

Route::get('/pengumuman', function () {
    return view('layouts.pengumuman');
});

Route::get('/rdm', function () {
    return view('layouts.rdm');
});
Route::get('/hubungi', function () {
    return view('layouts.hubungi');
});

Route::get('/ppdb', function () {
    return view('layouts.ppdb');
});


Route::resource('berita', BeritaController::class);

Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
