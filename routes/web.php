<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class,'home'])->name('home');
Route::get('/checkout', [UserController::class,'checkout'])->name('checkout');

