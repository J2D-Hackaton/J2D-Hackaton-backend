<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\InterventionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\MultipolygonsController;



// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);

Route::get('/interventions', [InterventionController::class, 'index']);
Route::get('/intervention/{id}', [InterventionController::class, 'show']);

// Route::middleware(['auth:api'])->group(function () {

// Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/intervention', [InterventionController::class, 'store']);
Route::put('/intervention/{id}', [InterventionController::class, 'update']);
Route::delete('/intervention/{id}', [InterventionController::class, 'destroy']);
// });

Route::get('/all', [MultipolygonsController::class, 'getAllMultipolygons'])->name('api.getAllMultipolygons');
Route::get('/boroughs', [MultipolygonsController::class, 'getCoordsFromAllBorough'])->name('api.getBoroughsCoords');