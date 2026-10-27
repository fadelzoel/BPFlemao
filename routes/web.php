<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// Question Routes
Route::get('question', [QuestionController::class, 'create'])->name('question.create');
Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

// Pelanggan Routes
Route::resource('pelanggan', PelangganController::class);

// Dashboard Route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');