<?php

use App\Http\Controllers\SeragamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'siswa'], function () {
    Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::put('/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});

Route::group(['prefix' => 'seragam'], function () {
    Route::get('/', [SeragamController::class, 'index'])->name('seragam.index');
    Route::post('/store', [SeragamController::class, 'store'])->name('seragam.store');
    Route::put('/update/{id}', [SeragamController::class, 'update'])->name('seragam.update');
    Route::get('/delete/{id}', [SeragamController::class, 'destroy'])->name('seragam.destroy');
});
