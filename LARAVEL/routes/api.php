<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SqlController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

Route::get('/products/{offset}/{limit}', [ProductsController::class,'getProducts']);
Route::get('/product/{id}', [ProductsController::class,'getProduct']);
Route::get('/updateLightMode/{userID}/{mode}', [SqlController::class,'updateLightMode']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
});
