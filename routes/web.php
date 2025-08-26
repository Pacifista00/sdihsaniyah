<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasLainController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PrestasiSectionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\SPMBController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\UserController;
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
Route::get('/kegiatan/{id}', [HomeController::class, 'detailKegiatan']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/daftar-spmb', [HomeController::class, 'spmb']);
Route::post('/daftar', [SPMBController::class, 'store']);
Route::post('/pesan', [PesanController::class, 'store']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard/jumbotron', [DashboardController::class, 'jumbotron']);
    Route::get('/dashboard/profil', [DashboardController::class, 'profil']);
    Route::get('/dashboard/foto-kurikulum-program', [DashboardController::class, 'fotoKurikulumProgram']);
    Route::get('/dashboard/kurikulum-program', [DashboardController::class, 'kurikulumProgram']);
    Route::get('/dashboard/prestasi-section', [DashboardController::class, 'prestasiSection']);
    Route::get('/dashboard/testimoni', [DashboardController::class, 'testimoni']);
    Route::get('/dashboard/pertanyaan', [DashboardController::class, 'pertanyaan']);
    Route::get('/dashboard/foto-tentang-kami', [DashboardController::class, 'fotoTentangKami']);
    Route::get('/dashboard/deskripsi', [DashboardController::class, 'deskripsi']);
    Route::get('/dashboard/visi', [DashboardController::class, 'visi']);
    Route::get('/dashboard/misi-sekolah', [DashboardController::class, 'misi']);
    Route::get('/dashboard/tujuan', [DashboardController::class, 'tujuan']);
    Route::get('/dashboard/program', [DashboardController::class, 'program']);
    Route::get('/dashboard/fasilitas', [DashboardController::class, 'fasilitas']);
    Route::get('/dashboard/fasilitas-lainnya', [DashboardController::class, 'fasilitasLain']);
    Route::get('/dashboard/foto-ekstrakulikuler', [DashboardController::class, 'fotoEkstrakulikuler']);
    Route::get('/dashboard/ekstrakulikuler', [DashboardController::class, 'ekstrakulikuler']);
    Route::get('/dashboard/foto-prestasi', [DashboardController::class, 'fotoPrestasi']);
    Route::get('/dashboard/prestasi', [DashboardController::class, 'prestasi']);
    Route::get('/dashboard/kegiatan', [DashboardController::class, 'kegiatan']);
    Route::get('/dashboard/kontak', [DashboardController::class, 'kontak']);
    Route::get('/dashboard/spmb', [DashboardController::class, 'spmb']);
    Route::get('/dashboard/pesan', [DashboardController::class, 'pesan']);
    Route::get('/dashboard/ppdb', [DashboardController::class, 'ppdb']);
    Route::get('/dashboard/user', [DashboardController::class, 'user']);
    Route::get('/dashboard/footer', [DashboardController::class, 'footer']);


    Route::post('/dashboard/jumbotron/insert', [JumbotronController::class, 'store']);
    Route::put('/dashboard/jumbotron/update/{id}', [JumbotronController::class, 'update']);
    Route::delete('/dashboard/jumbotron/delete/{id}', [JumbotronController::class, 'destroy']);

    Route::put('/dashboard/profil/update/{id}', [ProfilController::class, 'update']);

    Route::put('/dashboard/kurikulum/update-foto/{id}', [KurikulumController::class, 'updateFoto']);

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

    Route::put('/dashboard/tentang-kami/update-foto/{id}', [DeskripsiController::class, 'updateFoto']);

    Route::put('/dashboard/deskripsi/update/{id}', [DeskripsiController::class, 'update']);

    Route::put('/dashboard/visi/update/{id}', [VisiController::class, 'update']);

    Route::post('/dashboard/misi-sekolah/insert', [MisiController::class, 'store']);
    Route::put('/dashboard/misi-sekolah/update/{id}', [MisiController::class, 'update']);
    Route::delete('/dashboard/misi-sekolah/delete/{id}', [MisiController::class, 'destroy']);

    Route::post('/dashboard/tujuan/insert', [TujuanController::class, 'store']);
    Route::put('/dashboard/tujuan/update/{id}', [TujuanController::class, 'update']);
    Route::delete('/dashboard/tujuan/delete/{id}', [TujuanController::class, 'destroy']);

    Route::post('/dashboard/program/insert', [ProgramController::class, 'store']);
    Route::put('/dashboard/program/update/{id}', [ProgramController::class, 'update']);
    Route::delete('/dashboard/program/delete/{id}', [ProgramController::class, 'destroy']);

    Route::post('/dashboard/fasilitas/insert', [FasilitasController::class, 'store']);
    Route::put('/dashboard/fasilitas/update/{id}', [FasilitasController::class, 'update']);
    Route::delete('/dashboard/fasilitas/delete/{id}', [FasilitasController::class, 'destroy']);

    Route::post('/dashboard/fasilitas-lainnya/insert', [FasilitasLainController::class, 'store']);
    Route::put('/dashboard/fasilitas-lainnya/update/{id}', [FasilitasLainController::class, 'update']);
    Route::delete('/dashboard/fasilitas-lainnya/delete/{id}', [FasilitasLainController::class, 'destroy']);

    Route::put('/dashboard/ekstrakulikuler/update-foto/{id}', [EkstrakulikulerController::class, 'updateFoto']);

    Route::post('/dashboard/ekstrakulikuler/insert', [EkstrakulikulerController::class, 'store']);
    Route::put('/dashboard/ekstrakulikuler/update/{id}', [EkstrakulikulerController::class, 'update']);
    Route::delete('/dashboard/ekstrakulikuler/delete/{id}', [EkstrakulikulerController::class, 'destroy']);

    Route::put('/dashboard/prestasi/update-foto/{id}', [PrestasiController::class, 'updateFoto']);

    Route::post('/dashboard/prestasi/insert', [PrestasiController::class, 'store']);
    Route::put('/dashboard/prestasi/update/{id}', [PrestasiController::class, 'update']);
    Route::delete('/dashboard/prestasi/delete/{id}', [PrestasiController::class, 'destroy']);

    Route::post('/dashboard/kegiatan/insert', [KegiatanController::class, 'store']);
    Route::put('/dashboard/kegiatan/update/{id}', [KegiatanController::class, 'update']);
    Route::delete('/dashboard/kegiatan/delete/{id}', [KegiatanController::class, 'destroy']);

    Route::put('/dashboard/kontak/update/{id}', [KontakController::class, 'update']);

    Route::put('/dashboard/pendaftar/update/{id}', [SPMBController::class, 'update']);
    Route::put('/dashboard/pendaftar/status/update/{id}', [SPMBController::class, 'updateStatus']);
    Route::put('/dashboard/pendaftar/psikotes/update/{id}', [SPMBController::class, 'updatePsikotes']);
    Route::delete('/dashboard/pendaftar/delete/{id}', [SPMBController::class, 'destroy']);

    Route::put('/dashboard/pesan/update/{id}', [PesanController::class, 'update']);
    Route::delete('/dashboard/pesan/delete/{id}', [PesanController::class, 'destroy']);

    Route::post('/dashboard/ppdb/insert', [PPDBController::class, 'store']);
    Route::put('/dashboard/ppdb/update/{id}', [PPDBController::class, 'update']);
    Route::delete('/dashboard/ppdb/delete/{id}', [PPDBController::class, 'destroy']);

    Route::put('/dashboard/user/update/{id}', [UserController::class, 'update']);
    Route::put('/dashboard/user/ubah-password/{id}', [UserController::class, 'changePassword']);
    Route::delete('/dashboard/user/delete/{id}', [UserController::class, 'destroy']);

    Route::put('/dashboard/footer/update/{id}', [FooterController::class, 'update']);

    Route::get('/export/excel', [ExportController::class, 'exportExcel']);
    Route::get('/export/pdf/{id}', [ExportController::class, 'exportForm']);

});
