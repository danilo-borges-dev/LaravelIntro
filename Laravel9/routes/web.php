<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user/{user?}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/business', [BusinessController::class, 'index']);




