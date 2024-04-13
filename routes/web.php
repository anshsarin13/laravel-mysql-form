<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', CarController::class);


// Route::get('/cars', [CarController::class, 'index']);
// Route::get('/create', [CarController::class, 'create']);
// Route::get('/car/{carid}', [CarController::class, 'show']);
// Route::post('/create', [CarController::class, 'store']);


