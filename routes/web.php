<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PrestasiSectionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\VisiController;
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
Route::get('/dashboard/profil', [DashboardController::class, 'profil']);
Route::get('/dashboard/kurikulum-program', [DashboardController::class, 'kurikulumProgram']);
Route::get('/dashboard/prestasi-section', [DashboardController::class, 'prestasiSection']);
Route::get('/dashboard/testimoni', [DashboardController::class, 'testimoni']);
Route::get('/dashboard/pertanyaan', [DashboardController::class, 'pertanyaan']);
Route::get('/dashboard/deskripsi', [DashboardController::class, 'deskripsi']);
Route::get('/dashboard/visi', [DashboardController::class, 'visi']);
Route::get('/dashboard/misi-sekolah', [DashboardController::class, 'misi']);
Route::get('/dashboard/tujuan', [DashboardController::class, 'tujuan']);


Route::post('/dashboard/jumbotron/insert', [JumbotronController::class, 'store']);
Route::put('/dashboard/jumbotron/update/{id}', [JumbotronController::class, 'update']);
Route::delete('/dashboard/jumbotron/delete/{id}', [JumbotronController::class, 'destroy']);

Route::put('/dashboard/profil/update/{id}', [ProfilController::class, 'update']);

Route::post('/dashboard/kurikulum/insert', [KurikulumController::class, 'store']);
Route::put('/dashboard/kurikulum/update/{id}', [KurikulumController::class, 'update']);
Route::delete('/dashboard/kurikulum/delete/{id}', [KurikulumController::class, 'destroy']);

Route::post('/dashboard/unggulan/insert', [ProgramUnggulanController::class, 'store']);
Route::put('/dashboard/unggulan/update/{id}', [ProgramUnggulanController::class, 'update']);
Route::delete('/dashboard/unggulan/delete/{id}', [ProgramUnggulanController::class, 'destroy']);

Route::put('/dashboard/prestasi-section/update/{id}', [PrestasiSectionController::class, 'update']);

Route::put('/dashboard/pertanyaan/update/{id}', [PertanyaanController::class, 'update']);

Route::post('/dashboard/testimoni/insert', [TestimoniController::class, 'store']);
Route::put('/dashboard/testimoni/update/{id}', [TestimoniController::class, 'update']);
Route::delete('/dashboard/testimoni/delete/{id}', [TestimoniController::class, 'destroy']);

Route::put('/dashboard/deskripsi/update/{id}', [DeskripsiController::class, 'update']);

Route::put('/dashboard/visi/update/{id}', [VisiController::class, 'update']);

Route::post('/dashboard/misi-sekolah/insert', [MisiController::class, 'store']);
Route::put('/dashboard/misi-sekolah/update/{id}', [MisiController::class, 'update']);
Route::delete('/dashboard/misi-sekolah/delete/{id}', [MisiController::class, 'destroy']);

Route::post('/dashboard/tujuan/insert', [TujuanController::class, 'store']);
Route::put('/dashboard/tujuan/update/{id}', [TujuanController::class, 'update']);
Route::delete('/dashboard/tujuan/delete/{id}', [TujuanController::class, 'destroy']);

