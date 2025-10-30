<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinasiWisataController;     
use App\Http\Controllers\WargaController;     

// Route::get('/', function () {
//     return view('welcome');
// });

// DESTINASI
Route::get('/', [DestinasiWisataController::class, 'index'])->name('dashboard');
Route::get('/admin', [DestinasiWisataController::class, 'IndexAdmin'])->name('indexAdmin');
Route::resource('destinasi', DestinasiWisataController::class);
// Route::get('/destinasi/detail', [DestinasiWisataController::class, 'detail'])->name('destinasiDetail');
// DESTINASI END

// WARGA
Route::resource('warga', WargaController::class);
// WARGA END


// AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.process');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});