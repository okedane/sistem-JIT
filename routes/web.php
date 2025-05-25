<?php

use App\Http\Controllers\BahanBakuController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});


// Tampilkan daftar bahan baku (index)
Route::get('/bahanBaku', [BahanBakuController::class, 'index'])->name('bahanBaku.index');

// Tampilkan form tambah bahan baku (create)
Route::get('/bahanBakuCreate', [BahanBakuController::class, 'create'])->name('bahanBaku.create');

// Proses simpan data bahan baku baru (store)
Route::post('/bahanBaku', [BahanBakuController::class, 'store'])->name('bahanBaku.store');

// Tampilkan form edit bahan baku tertentu (edit)
Route::get('/bahanBaku{id}edit', [BahanBakuController::class, 'edit'])->name('bahanBaku.edit');

// Proses update data bahan baku tertentu (update)
Route::put('/bahanBaku/{id}', [BahanBakuController::class, 'update'])->name('bahanBaku.update');

// Proses hapus data bahan baku tertentu (destroy)
Route::delete('/bahanBaku/{id}', [BahanBakuController::class, 'destroy'])->name('bahanBaku.destroy');




Route::get('/suplier.index', function () {
    return view('suplier.index');
});

Route::get('/suplier.create', function () {
    return view('suplier.create');
});

Route::get('/suplier.edit', function () {
    return view('suplier.edit');
});


Route::get('/transaksi_masuk.index', function () {
    return view('transaksi_masuk.index');
});

Route::get('/transaksi_masuk.create', function () {
    return view('transaksi_masuk.create');
});

Route::get('/transaksi_masuk.edit', function () {
    return view('transaksi_masuk.edit');
});


Route::get('/transaksi_keluar.index', function () {
    return view('transaksi_keluar.index');
});
