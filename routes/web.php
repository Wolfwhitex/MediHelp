<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
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
});

// Route::get('home', function () {
//     return view('home');
// })->middleware('auth');


Route::get('/saranobat', function () {
    return view('saranobat');
});

Route::get('/hasilsaran', function () {
    return view('hasilsaran');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/apotek', function () {
    return view('apotek');
});

Route::get('/obatapotek', function () {
    return view('obatapotek');
});

// Route::get('/konsultasi/create', [KonsultasiController::class, 'create'])->name('konsultasi.create');
// Route::post('/konsultasi/store', [KonsultasiController::class, 'store'])->name('konsultasi.store');

// Route::view('registerform', 'register')->name('register');
// Route::POST('datasubmit',[RegisterController::class, 'datasubmit']);

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::post('/register', [RegisterController::class, 'datasubmit'])->name('datasubmit');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::post('/login', [RegisterController::class, 'login'])->name('login');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth:konsumen');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');

// Route::post('/authenticate', [RegisterController::class, 'authenticate']);

// Route::get('/logout', [RegisterController::class, 'logout']);


// Route::get('/register',
// [RegisterController::class,'register']);

// // Route::get('home',
// // [MainController::class,'HomePage']);

// Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi');

// Route::get('/konsultasi', [KonsultasiController::class, 'create'])->name('konsultasi.create');
// Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');


Route::get('konsumen', array('as' => 'konsumen.index', 'uses' => 'RegisterController@index'));
Route::get('konsumen/register', array('as' => 'konsumen.register', 'uses' => 'RegisterController@register'));
Route::post('konsumen/store', array('as' => 'konsumen.store', 'uses' => 'RegisterController@store'));
Route::get('konsumen/login', array('as' => 'konsumen.login', 'uses' => 'RegisterController@login'));
Route::post('konsumen/authenticate', array('as' => 'konsumen.authenticate', 'uses' => 'RegisterController@authenticate'));
Route::get('konsumen/logout', array('as' => 'konsumen.logout', 'uses' => 'RegisterController@logout'));
Route::get('konsumen/account', array('as' => 'konsumen.account', 'uses' => 'RegisterController@account'))->middleware('auth');