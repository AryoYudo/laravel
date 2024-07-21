<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', 'App\Http\Controllers\helloController@index');
Route::get('hello', [helloController::class, 'index']);

Route::get('world', [helloController::class, 'store']);

// Route::get('hello/{id}', [helloController::class, 'show']);