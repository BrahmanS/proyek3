<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BarangController;
use App\Http\Controllers\API\KasirController;
use App\Http\Controllers\API\TenanController;
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
    return view('welcome');
});

Route::get('/barang/add', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/detail/{id}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/edit/{kodeBarang}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barangs/show/{kodeBarang}', [BarangController::class, 'show'])->name('barangs.show');

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');

Route::get('/tenan', [TenanController::class, 'index'])->name('tenan.index');