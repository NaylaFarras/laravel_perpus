<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotauController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RakController;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/index', [PagesController::class, 'index'])->name('index');
// Route::get('/anggota', [AnggotauController::class, 'create'])->name('anggota');
// Route::get('/book', [BukuController::class, 'create'])->name('book');
// Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
Route::get('/', function()
{
    return view('template.master');
});

Route::get('/anggota', [AnggotauController::class, 'create'])->name('anggota');
Route::get('/buku', [BukuController::class, 'create'])->name('buku');
Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
Route::get('/rak', [RakController::class, 'create'])->name('rak');
Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
Route::get('/pengembalian', [PengembalianController::class, 'create'])->name('pengembalian');