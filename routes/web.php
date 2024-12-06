<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tags' => Tag::get()
    ]);
});

Route::get('about', function () {
    return view('welcome');
});
Route::view('profile', 'profile');
Route::post('profile', [ProfileController::class, 'upload'])->name('profile');

Route::post('tags', [TagController::class, 'store']);
Route::delete('tags/{tag}', [TagController::class, 'destroy']);
