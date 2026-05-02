<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/about-', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index'])->name('pages.doctors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Backend routes
Route::group([
    'prefix' => 'backends',
], function() {
    // Doctor routes
    Route::group([
        'prefix' => 'doctors',
    ], function() {
        Route::get('/', [App\Http\Controllers\Backends\DoctorController::class, 'index'])->name('backends.doctors.index');
        Route::get('/create', [App\Http\Controllers\Backends\DoctorController::class, 'create'])->name('backends.doctors.create');
        Route::post('/', [App\Http\Controllers\Backends\DoctorController::class, 'store'])->name('backends.doctors.store');
    });
});


