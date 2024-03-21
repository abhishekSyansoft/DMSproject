<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\moduleMasterController;

Route::controller(AuthController::class)->group(function () {
    Route::post('api/login', 'login');
    Route::post('api/register', 'register');
    Route::post('api/refresh', 'refresh');
});

