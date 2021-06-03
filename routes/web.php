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

Route::get('/summary', [
    App\Http\Controllers\ReportingController::class,
    'summary'
]);

Route::get('/category', [
    App\Http\Controllers\ReportingController::class,
    'category'
]);
