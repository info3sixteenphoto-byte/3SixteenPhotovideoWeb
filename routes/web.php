<?php

use App\Http\Controllers\ClientPortalController;
use Illuminate\Support\Facades\Route;

// Halaman depan editorial + form Registrasi & Login menyatu
Route::get('/', [ClientPortalController::class, 'index'])->name('home');

// Proses registrasi klien baru -> otomatis membuat akun Email & Sandi
Route::post('/register-client', [ClientPortalController::class, 'register'])->name('client.register');

// Proses login klien menggunakan Email & Sandi
Route::post('/login-client', [ClientPortalController::class, 'login'])->name('client.login');

// Web Manajemen Klien (Progres Foto, Pilihan Edit/Album, Download, Pengingat Pembayaran)
Route::get('/portal', [ClientPortalController::class, 'dashboard'])->name('client.dashboard');
Route::post('/portal/select-photo', [ClientPortalController::class, 'togglePhotoSelection'])->name('client.photo.toggle');
Route::post('/portal/confirm-payment', [ClientPortalController::class, 'confirmPayment'])->name('client.payment.confirm');
Route::post('/logout-client', [ClientPortalController::class, 'logout'])->name('client.logout');
