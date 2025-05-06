<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliMuridController;
use App\Http\Controllers\KelasController;

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

Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);



Route::get('/wali_murid', [KelasController::class, 'index'])->name('wali.index');
Route::get('/kelas', [WaliMuridController::class, 'index'])->name('kelas.index');

