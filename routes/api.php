<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\ProjectController as V1ProjectController;
use App\Http\Controllers\API\V2\ProjectController as V2ProjectController;

// Version 1 Routes
Route::prefix('v1')->group(function () {
    Route::get('/projects', [V1ProjectController::class, 'index']);
    Route::post('/projects', [V1ProjectController::class, 'store']);
});

// Version 2 Routes
Route::prefix('v2')->group(function () {
    Route::get('/projects', [V2ProjectController::class, 'index']);
    Route::post('/projects', [V2ProjectController::class, 'store']);
});

