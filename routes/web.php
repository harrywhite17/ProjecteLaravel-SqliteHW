<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SongController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('movies', MovieController::class);
Route::resource('songs', SongController::class);
