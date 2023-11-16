<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\MultipolygonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::middleware(['auth:api'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/all', [MultipolygonController::class, 'getAllMultipolygons'])->name('api.getAllMultipolygons');
Route::get('/boroughs', [MultipolygonController::class, 'getBoroughsCoords'])->name('api.getBoroughsCoords');