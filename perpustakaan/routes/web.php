<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrasiAnggotaController;

use App\Http\Controllers\PeminjamanBukuController;

use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\BukuController;

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;


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

Route::get('/salam', function () {
    return "Assalamualaikum ukhti";
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/tes-kesehatan', function () {
    return view('tes');
});

// praktikum 9
Route::get('form-registrasi-anggota', 
[RegistrasiAnggotaController::class, 'index']); 

Route::post('hasil-regist', 
[RegistrasiAnggotaController::class, 'hasil']); 

Route::get('form-buku', 
[PeminjamanBukuController::class, 'index']); 

Route::post('hasil-buku', 
[PeminjamanBukuController::class, 'hasil']); 


// praktikum 10
Route::get('/dashboard', [DashboardController::class, 'index']); 
// Route::get('/buku', [BukuController::class, 'index']); 

// praktikum 11
Route::get('/dashboard/book', [BookController::class, 'index']);
Route::get('/dashboard/member', [MemberController::class, 'index']); 
