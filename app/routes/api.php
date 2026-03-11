<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/sales', [ApiController::class, 'sales']);
Route::get('/orders', [ApiController::class, 'orders']);
Route::get('/stocks', [ApiController::class, 'stocks']);
Route::get('/incomes', [ApiController::class, 'incomes']);



