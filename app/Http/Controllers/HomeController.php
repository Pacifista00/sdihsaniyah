<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Deskripsi;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\FasilitasLainnya;
use App\Models\FotoEkstrakulikuler;
use App\Models\FotoKurikulum;
use App\Models\FotoPrestasi;
use App\Models\FotoTentang;
use App\Models\Jumbotron;
use App\Models\Kegiatan;
use App\Models\Kontak;
use App\Models\Kurikulum;
use App\Models\Misi;
use App\Models\Pertanyaan;
use App\Models\Prestasi;
use App\Models\PrestasiSection;
use App\Models\Profil;
use App\Models\Program;
use App\Models\Testimoni;
use App\Models\Tujuan;
use App\Models\Unggulan;
use App\Models\Visi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'active' => 'index',
            'jumbotron' => Jumbotron::all(),
            'profil' => Profil::latest()->first(),
            'ppdb' => Angkatan::latest()->take(3)->get(),
            'fotoKurikulum' => FotoKurikulum::latest()->take(3)->get(),
            'kurikulum' => Kurikulum::all(),
            'program' => Unggulan::all(),
            'prestasi' => PrestasiSection::latest()->first(),
            'testimoni' => Testimoni::latest()->get(),
            'kegiatan' => Kegiatan::latest()->get(),
            'pertanyaan' => Pertanyaan::latest()->first(),
        ]);
    }
    public function tentangKami()
    {
        return view('tentang-kami', [
            'active' => 'tentang-kami',
            'fotoTentang' => FotoTentang::latest()->take(3)->get(),
            'deskripsi' => Deskripsi::latest()->first(),
            'visi' => Visi::latest()->first(),
            'misi' => Misi::all(),
            'tujuan' => Tujuan::all(),
        ]);
    }
    public function program()
    {
        return view('program', [
            'active' => 'program',
            'program' => Program::all()
        ]);
    }
    public function fasilitas()
    {
        return view('fasilitas', [
            'active' => 'fasilitas',
            'fasilitas' => Fasilitas::all(),
            'fasilitasLain' => FasilitasLainnya::all()
        ]);
    }
    public function ekstrakulikuler()
    {
        return view('ekstrakulikuler', [
            'active' => 'ekstrakulikuler',
            'fotoEkskul' => FotoEkstrakulikuler::latest()->take(3)->get(),
            'ekskul1' => Ekstrakulikuler::where('kategori', 'Seni & Akademik')->get(),
            'ekskul2' => Ekstrakulikuler::where('kategori', 'Olahraga & Kepemimpinan')->get()
        ]);
    }
    public function prestasiSiswa()
    {
        return view('prestasi-siswa', [
            'active' => 'prestasi',
            'fotoPrestasi' => FotoPrestasi::latest()->take(3)->get(),
            'prestasi' => Prestasi::all(),
            'prestasiInternasional' => Prestasi::where('kategori', 'internasional')->get(),
            'prestasiNasional' => Prestasi::where('kategori', 'nasional')->get(),
            'prestasiProvinsi' => Prestasi::where('kategori', 'provinsi')->get(),
            'prestasiKota' => Prestasi::where('kategori', 'kota')->get(),
        ]);
    }
    public function kegiatan()
    {
        return view('kegiatan', [
            'active' => 'kegiatan'
        ]);
    }
    public function kontak()
    {
        return view('kontak', [
            'active' => 'kontak',
            'kontak' => Kontak::latest()->first()
        ]);
    }
    public function spmb()
    {
        return view('spmb', [
            'active' => 'spmb',
            'angkatan' => Angkatan::all()
        ]);
    }
}
