<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('welcome');
});
Route::view('profile', 'profile');
Route::post('profile', [ProfileController::class, 'upload'])->name('profile');
