<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');

Route::get('/daftarjurusan',[JurusanController::class,'index']);
Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

Route::resource('pendaftaran', PendaftaranController::class);
