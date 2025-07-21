<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BarangController;

Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang', [BarangController::class, 'store']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);
