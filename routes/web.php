<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login.index');
});

Route::post('/login/proses', [LoginController::class, 'proses'])->name('login.proses');
Route::get('/frontend', function() {
    return view('frontend.index'); // Ganti dengan view frontend tujuan
})->name('frontend');
