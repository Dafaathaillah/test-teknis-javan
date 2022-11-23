<?php

use App\Http\Controllers\AnakBudiController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\BibiFarahController;
use App\Http\Controllers\CucuBudiController;
use App\Http\Controllers\CucuController;
use App\Http\Controllers\CucuPerempuanBudiController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\SepupuLakiLakiHaniController;
use App\Http\Controllers\Soal1Controller;
use App\Http\Controllers\Soal9Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.master');
// });

// soal 1
Route::resource('/', Soal1Controller::class);
Route::resource('soal1', Soal1Controller::class);

// orangtua
Route::resource('orangtua', OrangtuaController::class);
Route::get('orangtua/delete/{id}', [OrangtuaController::class, 'destroy'])->name('orangtua.delete');

// anak
Route::resource('anak', AnakController::class);
Route::get('anak/delete/{id}', [AnakController::class, 'destroy'])->name('anak.delete');

// cucu
Route::resource('cucu', CucuController::class);
Route::get('cucu/delete/{id}', [CucuController::class, 'destroy'])->name('cucu.delete');

// menampilkan anak budi
Route::resource('anakbudi', AnakBudiController::class);

// menampilkan cucu budi
Route::resource('cucubudi', CucuBudiController::class);

// menampilkan cucu perempuan budi
Route::resource('cucuperempuanbudi', CucuPerempuanBudiController::class);

// menampilkan bibi farah
Route::resource('bibifarah', BibiFarahController::class);

// menampilkan sepupu laki-laki hani
Route::resource('sepupu', SepupuLakiLakiHaniController::class);

// soal 9
Route::resource('soal9', Soal9Controller::class);
