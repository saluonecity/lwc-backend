<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login api
Route::post('/login', [AuthController::class, 'login']);

//product api
Route::apiResource('/api-products', ProductController::class)->middleware('auth:sanctum');
Route::apiResource('/api-categories', CategoryController::class)->middleware('auth:sanctum');
