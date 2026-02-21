<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('login');
});

Route::post('/proses-login', [AuthController::class, 'login'])->name('login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/petugas/dashboard', function () {
    return view('petugas.dashboard');
})->name('petugas.dashboard');

Route::get('/peminjam/dashboard', function () {
    return view('peminjam.dashboard');
})->name('peminjam.dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/proses_data_user', [App\Http\Controllers\AuthController::class, 'login'])->name('proses.data.user');

// Route::get('/datauser', [App\Http\Controllers\user::class, 'read_data_user'])->name('read.data.user');

//lain kali pakai yang ini
// Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');