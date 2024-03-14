<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/', function () {
    return view('Login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
