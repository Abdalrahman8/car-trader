<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//  return inertia('Index/Index');
//});

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/show', [IndexController::class, 'show']);