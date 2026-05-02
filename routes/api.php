<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
        'prefix' => 'doctors',
    ], function() {
        Route::get('/', [App\Http\Controllers\Api\DoctorController::class, 'index']);
        Route::get('/{doctor}', [App\Http\Controllers\Api\DoctorController::class, 'show']);
    });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
