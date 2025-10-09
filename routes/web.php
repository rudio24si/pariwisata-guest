<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinasiWisataController;     

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DestinasiWisataController::class, 'index'])->name('dashboard');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses-login', [AuthController::class, 'login'])->name('proses-login');
