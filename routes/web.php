<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataOtController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\SuratPengantarController;
use App\Http\Controllers\UserController;

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
    // return redirect()->to('/login');
    return view('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('/dataot', DataOtController::class);
Route::resource('/pendataan', PendataanController::class);
Route::resource('/laporan', LaporanController::class);
Route::resource('/suratpengantar', SuratPengantarController::class);
Route::get('/carinik', [PendataanController::class, 'carinik'])->name('carinik');
Route::get('/filtersurat', [SuratPengantarController::class, 'filtersurat'])->name('filtersurat');
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/printlaporan', [LaporanController::class, 'printlaporan'])->name('printlaporan');
Route::get('/print', [SuratPengantarController::class, 'print'])->name('print');;
