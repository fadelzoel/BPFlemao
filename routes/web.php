<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// Question Routes
Route::get('question', [QuestionController::class, 'create'])->name('question.create');
Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

// Pelanggan Routes
Route::resource('pelanggan', PelangganController::class);

// Protect Dashboard & general admin pages for logged-in users
Route::middleware(['checkislogin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('pelanggan', PelangganController::class);

    // Only superadmin can access User CRUD
    Route::middleware(['checkrole:superadmin'])->group(function () {
        Route::resource('user', UserController::class);
    });
});


Route::get('portofolio/admin', [PortofolioController::class, 'admin'])->name('portofolio.admin');
Route::resource('portofolio', PortofolioController::class);


// Dashboard Route
Route::get('dashboard', [DashboardController::class, 'index'])
->name('dashboard')
->middleware('checkislogin');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('auth.logout');