<?php

use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TransaksiKeluarController;
use App\Http\Controllers\TransaksiMasukController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});



Route::get('/bahanBaku', [BahanBakuController::class, 'index'])->name('bahanBaku.index');


Route::get('/bahanBakuCreate', [BahanBakuController::class, 'create'])->name('bahanBaku.create');


Route::post('/bahanBaku', [BahanBakuController::class, 'store'])->name('bahanBaku.store');


Route::get('/bahanBaku{id}edit', [BahanBakuController::class, 'edit'])->name('bahanBaku.edit');


Route::put('/bahanBaku/{id}', [BahanBakuController::class, 'update'])->name('bahanBaku.update');


Route::delete('/bahanBaku/{id}', [BahanBakuController::class, 'destroy'])->name('bahanBaku.destroy');

Route::get('/supplier.index', [SuplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier.create', [SuplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier.store', [SuplierController::class, 'store'])->name('supplier.store');
Route::get('/supplier.edit.{id}', [SuplierController::class, 'edit'])->name('supplier.edit');
Route::put('/supplier.update/{id}', [SuplierController::class, 'update'])->name('supplier.update');
Route::delete('/supplier.destroy.{id}', [SuplierController::class, 'destroy'])->name('supplier.destroy');

Route::get('/transaksi_masuk.index', [TransaksiMasukController::class, 'index'])->name('transaksi_masuk.index');
Route::get('/transaksi_masuk.create', [TransaksiMasukController::class, 'create'])->name('transaksi_masuk.create');
Route::post('/transaksi_masuk.store', [TransaksiMasukController::class, 'store'])->name('transaksi_masuk.store');
Route::get('/transaksi_masuk.edit.{id}', [TransaksiMasukController::class, 'edit'])->name('transaksi_masuk.edit');
Route::put('/transaksi_masuk.update/{id}', [TransaksiMasukController::class, 'update'])->name('transaksi_masuk.update');
Route::delete('/transaksi_masuk.destroy.{id}', [TransaksiMasukController::class, 'destroy'])->name('transaksi_masuk.destroy');

Route::get('/transaksi_keluar.index', [TransaksiKeluarController::class, 'index'])->name('transaksi_keluar.index');
Route::get('/transaksi_keluar.create', [TransaksiKeluarController::class, 'create'])->name('transaksi_keluar.create');
Route::post('/transaksi_keluar.store', [TransaksiKeluarController::class, 'store'])->name('transaksi_keluar.store');
Route::get('/transaksi_keluar.edit.{id}', [TransaksiKeluarController::class, 'edit'])->name('transaksi_keluar.edit');
Route::put('/transaksi_keluar.update/{id}', [TransaksiKeluarController::class, 'update'])->name('transaksi_keluar.update');
Route::delete('/transaksi_keluar.destroy.{id}', [TransaksiKeluarController::class, 'destroy'])->name('transaksi_keluar.destroy');