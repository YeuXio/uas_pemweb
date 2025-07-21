<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\BarangWebController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::get('/', function () {
    return view('welcome');
});

// ✅ Tambahkan route untuk Barang (Frontend via Blade)
Route::get('/barang', [BarangWebController::class, 'index']);
Route::get('/barang/create', [BarangWebController::class, 'create']);
Route::post('/barang', [BarangWebController::class, 'store']);
