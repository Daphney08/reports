<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\ReportingController::class,
    'index'
]);

Route::get('/orders', [
    App\Http\Controllers\ReportingController::class,
    'orders'
]);