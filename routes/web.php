<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::post('/login/proses', [LoginController::class, 'proses'])->name('login.proses');
