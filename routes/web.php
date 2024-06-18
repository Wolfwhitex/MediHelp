<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ApotekController;
use App\Http\Controllers\TransactionController;
//use App\Http\Controllers\AuthController;
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

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// Route::get('/saranobat', function () {
//     return view('saranobat');
// });

Route::get('/formsaran', function () {
    return view('formsaran');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/apotek', function () {
    return view('apotek');
});


Route::get('/obatapotek', [ApotekController::class, 'show']);

// Route::view('registerform', 'register')->name('register');
// Route::POST('datasubmit',[RegisterController::class, 'datasubmit']);

// Route::post('/register', [RegisterController::class, 'datasubmit'])->name('datasubmit');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::post('/login', [RegisterController::class, 'login'])->name('login');

Route::get('/konsultasi', [KonsultasiController::class, 'create'])->name('konsultasi.create');
Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.post');

Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

// Route::get('/saranobat', [ObatController::class, 'saranObatForm'])->name('saran.obat');
// Route::post('/saranobat', [ObatController::class, 'saranObat'])->name('saran.obat.result');

Route::get('/search', [ObatController::class, 'search']);
Route::get('/saranobat', [ObatController::class, 'saranobat'])->name('saranobat');

// routes/web.php
Route::get('/transaksi', [TransactionController::class, 'create'])->name('transaction.create');
Route::post('/transaksi', [TransactionController::class, 'store'])->name('transaction.store');
