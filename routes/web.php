<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kategori;

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

//Route kategori
Route::get('/kategori', function () {
    return view('admin.kategori');
});

//Route proses input kategori
Route::post('/kategori/store', [App\Http\Controllers\Kategori::class, 'proses_data_kategori'])->name('kategori.store');

//Route read data kategori
Route::get('/datakategori', [App\Http\Controllers\Kategori::class, 'read_data_kategori'])->name('read.data.kategori');

//Route form edit data kategori
Route::get('/kategori/edit/{id}', [App\Http\Controllers\Kategori::class, 'edit_data_kategori'])->name('kategori.edit');

//Route proses update data kategori
Route::post('/kategori/update/{id}', [App\Http\Controllers\Kategori::class, 'update_data_kategori'])->name('kategori.update');

//Route delete data kategori
Route::get('/kategori/delete/{id}', [App\Http\Controllers\Kategori::class, 'delete_data_kategori'])->name('kategori.delete');

// Route::post('/proses_data_user', [App\Http\Controllers\AuthController::class, 'login'])->name('proses.data.user');

// Route::get('/datauser', [App\Http\Controllers\user::class, 'read_data_user'])->name('read.data.user');

//lain kali pakai yang ini
// Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');