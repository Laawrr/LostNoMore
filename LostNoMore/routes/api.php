<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\FoundItemController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ActivityLogController;

// Public Routes (e.g., user registration/login)
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Protected Routes (Require Authentication)
Route::middleware(['auth:sanctum'])->group(function () {

    // User-related routes
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // Lost Items
    Route::apiResource('lost-items', LostItemController::class);

    // Found Items
    Route::apiResource('found-items', FoundItemController::class);

    // Claims
    Route::apiResource('claims', ClaimController::class);

    // Sessions (read-only)
    Route::get('/sessions', [SessionController::class, 'index']);
    Route::get('/sessions/{id}', [SessionController::class, 'show']);

    // Activity Logs
    Route::apiResource('activity-logs', ActivityLogController::class);

    // Logout Route
    Route::post('/logout', [UserController::class, 'logout']);
});
