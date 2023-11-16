<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/interventions', [Controller::class, 'index']);

Route::middleware(['auth:api'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/', [Controller::class, 'store']);
    Route::get('//{id}', [Controller::class, 'show']);
    Route::post('//{id}', [Controller::class, 'update']);
    Route::delete('//{id}', [Controller::class, 'destroy']);
});