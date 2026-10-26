<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('layouts.index');
});

// route::get('/kategori', function () {
//     return view('kategori.index');
// });

// route::get('/satuan', function () {
//     return view('satuan.index');
// });

// route::get('/supplier', function () {
//     return view('supplier.index');
// });

// route::get('/metode', function () {
//     return view('metode.index');
// });

// route::get('/produk', function () {
//     return view('produk.index');
// });

route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('dashboard');
route::get('/satuan', [App\Http\Controllers\SatuanController::class, 'index'])->name('dashboard');
route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('dashboard');
route::get('/metode', [App\Http\Controllers\MetodeController::class, 'index'])->name('dashboard');
route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('dashboard');