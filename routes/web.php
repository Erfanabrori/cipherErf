<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KriptoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/login');

// ================= LOGIN =================
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ================= DASHBOARD =================
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->name('dashboard');



// ================= PENGGUNA =================
Route::get('/halo-maba-sti', [PenggunaController::class, 'index']);
Route::post('/simpan-pengguna', [PenggunaController::class, 'create']);

// ================= CAESAR =================
Route::get('/caesar/{jenis?}', [KriptoController::class, 'index'])->name('caesar');
Route::post('/caesar-process', [KriptoController::class, 'process']);
Route::post('/caesar-process-json', [KriptoController::class, 'processJson']);

// ================= USERS & PROFIL =================
Route::get('/daftar-pengguna', [PenggunaController::class, 'index'])->name('users');
Route::get('/profil', [PenggunaController::class, 'profil'])->name('profil');

// ================= HILL & VIGENERE =================
Route::get('/hill', function () {return view('hill');})->name('hill');

Route::get('/vigenere', function () {return view('vigenere');})->name('vigenere');