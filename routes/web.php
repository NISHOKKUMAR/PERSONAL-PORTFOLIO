<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
require __DIR__ . '/auth.php';

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::resource('projects', ProjectController::class);

Route::resource('blogs', BlogController::class);

