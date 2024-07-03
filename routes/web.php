<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('login', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::resource('level', LevelController::class);
Route::resource('member', MemberController::class);
Route::resource('book', BookController::class);
Route::resource('transaksi', TransactionController::class);

// Route::get('peminjaman', [TransactionController::class, 'indexPeminjaman']);
// Route::get('pengenbalian', [TransactionController::class, 'indexPengembalian']);

Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengembalian', PengembalianController::class);