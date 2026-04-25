<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/about-', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/doctors', function () {
    return view('pages.doctors');
})->name('pages.doctors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
