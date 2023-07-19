<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
})->name('login');

Route::post('/authentication', [AuthController::class, 'authentication'])->name('authentication');
