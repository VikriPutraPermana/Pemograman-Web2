<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegistrasiAnggotaController;
use App\http\Controllers\PeminjamanBukuController;
use App\http\Controllers\DashboardController;

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
Route::get('/Salam', function () {
    return "Assalamualaikum Boy";
});

Route::get('/kabar', function () {
    return view('kondisi');
});


Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/tes', function () {
    return view('kesehatan');
});

//praktikum 9
Route::get('/form-registrasi-anggota', [RegistrasiAnggotaController::class, 'index']);
Route::post('/hasil-regist', [RegistrasiAnggotaController::class, 'hasil']);

Route::get('/form-peminjaman-buku', [PeminjamanBukuController::class, 'index']);
Route::post('/hasil-pinjam', [PeminjamanBukuController::class, 'hasil']);

//praktikum 10
Route::get('/dashboard', [DashboardController::class, 'index']);