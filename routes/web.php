<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JumbotronController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-kami', [HomeController::class, 'tentangKami']);
Route::get('/program', [HomeController::class, 'program']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/ekstrakulikuler', [HomeController::class, 'ekstrakulikuler']);
Route::get('/prestasi-siswa', [HomeController::class, 'prestasiSiswa']);
Route::get('/kegiatan', [HomeController::class, 'kegiatan']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/daftar-spmb', [HomeController::class, 'spmb']);

Route::get('/login', [AuthController::class, 'index']);

Route::get('/dashboard/jumbotron', [DashboardController::class, 'jumbotron']);



Route::post('/dashboard/jumbotron/insert', [JumbotronController::class, 'store']);
Route::put('/dashboard/jumbotron/update/{id}', [JumbotronController::class, 'update']);
Route::delete('/dashboard/jumbotron/delete/{id}', [JumbotronController::class, 'destroy']);
