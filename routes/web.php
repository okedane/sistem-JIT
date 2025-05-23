<?php

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

Route::get('/bahan.index', function () {
    return view('bahan_baku.index');
});

Route::get('/bahan.create', function () {
    return view('bahan_baku.create');
});
Route::get('/bahan.edit', function () {
    return view('bahan_baku.edit');
});


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