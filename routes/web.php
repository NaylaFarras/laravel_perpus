<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotauController;


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


Route::get('/index', [PagesController::class, 'index'])->name('index');
Route::get('/anggota', [AnggotauController::class, 'create'])->name('anggota');
Route::get('/book', [BukuController::class, 'create'])->name('book');
Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
Route::get('/', function()
{
    return view('template.master');
});