<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('profile');
});

Route::get('/profilsekolah', function () {
    return view('ProfilSekolah'); // Nama file tanpa ekstensi .blade.php
});
