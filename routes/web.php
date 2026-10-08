<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route Home (/)
Route::get('/', function () {
    return view('welcome');
});

// Route About (/about)
Route::get('/about', function () {
    $anggota = [
        'Ajeng Selsyra',
        'Suci Annisa',
        'Santo Simarmata',
        'Sri Supriana',
        'Said Muhammad Naufal'
    ];
    return view('about', ['anggota' => $anggota]);
});

// Route Contact (/contact)
Route::get('/contact', function () {
    return view('contact');
});

// Route Products (menggunakan Controller)
Route::get('/products', [ProductController::class, 'index']);