<?php

use App\Http\Controllers\provinsiController;
use App\Http\Controllers\gubernurController;
use App\Http\Controllers\walikotaController;
use App\Models\gubernur;
use App\Models\provinsi;
use Illuminate\Support\Facades\Route;

Route::get('/', [provinsiController::class, 'index']);
Route::get('/gubernur', [gubernurController::class, 'index']);
Route::get('/gubernur/{id}', [gubernurController::class, 'detail']);
Route::get('/walikota/{id}', [walikotaController::class, 'detail']);


Route::get('/walikota', function () {
    return view('walikota');
});

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/search-gubernur', [gubernurController::class, 'search'])->name('gubernur.search');
Route::get('/{provinsi}/gubernur', [gubernurController::class, 'showpr'])->name('gubernur.show');

Route::get('/{provinsi}/walikota', [walikotaController::class, 'showpr']);


Route::get('/gubernur/{id}/edit', [GubernurController::class, 'edit'])->name('gubernur.edit');
Route::put('/gubernur/{id}', [GubernurController::class, 'update'])->name('gubernur.update');
