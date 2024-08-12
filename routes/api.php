<?php

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ReportController::class, 'index']);
Route::post('/products', [ReportController::class, 'store']);
Route::get('/products/{id}', [ReportController::class, 'show']);
Route::put('/products/{id}', [ReportController::class, 'update']);
Route::delete('/products/{id}', [ReportController::class, 'destroy']);

/*Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);*/
