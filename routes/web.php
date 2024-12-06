<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('welcome');
});
Route::view('profile', 'profile');
Route::post('profile', function (Request $request) {
    $request->file('photo')->store('profiles');
    return redirect('profile');
})->name('profile');
