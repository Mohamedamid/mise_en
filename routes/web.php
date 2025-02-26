<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/display', [ProductController::class, 'display']);
Route::post('/store', [ProductController::class, 'store']);
Route::post('/destroy', [ProductController::class, 'destroy']);




