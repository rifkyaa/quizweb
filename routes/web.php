<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
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

Route::controller(ProductController::class)->group(function(){
    Route::get('/','index');
    Route::get('/transaction', [TransaksiController::class, 'dataTransaction'])->name('transaction.index');
    Route::get('/transaction/buattransaksi', [TransaksiController::class, 'buatTransaction'])->name('transaction.buat');
    Route::post('/transaction', [TransaksiController::class, 'store'])->name('transaction.store');
});