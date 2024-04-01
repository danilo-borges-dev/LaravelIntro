<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user/{user?}', [UserController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);


//Route::get('/users/{user?}', [UserController::class, 'show']);
