<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
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

class DashboardController extends Controller
{
    public function jumbotron()
    {
        return view('dashboard.jumbotron', [
            'jumbotrons' => Jumbotron::latest()->get(),
            'active' => 'jumbotron'
        ]);
    }
    public function profil()
    {
        return view('dashboard.profil', [
            'profil' => Profil::latest()->get(),
            'active' => 'profil'
        ]);
    }
    public function fotoKurikulumProgram()
    {
        return view('dashboard.foto-kurikulum', [
            'fotoKurikulums' => FotoKurikulum::all(),
            'active' => 'foto kurikulum'
        ]);
    }
    public function kurikulumProgram()
    {
        return view('dashboard.kurikulum-program', [
            'kurikulums' => Kurikulum::all(),
            'unggulans' => Unggulan::all(),
            'active' => 'kurikulum & program unggulan'
        ]);
    }
    public function prestasiSection()
    {
        return view('dashboard.prestasi-section', [
            'prestasi' => PrestasiSection::latest()->get(),
            'active' => 'prestasi'
        ]);
    }
    public function testimoni()
    {
        return view('dashboard.testimoni', [
            'testimonis' => Testimoni::latest()->get(),
            'active' => 'testimoni'
        ]);
    }
    public function pertanyaan()
    {
        return view('dashboard.pertanyaan', [
            'pertanyaan' => Pertanyaan::latest()->get(),
            'active' => 'pertanyaan'
        ]);
    }
    public function fotoTentangKami()
    {
        return view('dashboard.foto-tentang', [
            'fotoTentangs' => FotoTentang::all(),
            'active' => 'foto tentang kami'
        ]);
    }
    public function deskripsi()
    {
        return view('dashboard.deskripsi', [
            'deskripsi' => Deskripsi::latest()->get(),
            'active' => 'deskripsi'
        ]);
    }
    public function visi()
    {
        return view('dashboard.visi', [
            'visi' => Visi::latest()->get(),
            'active' => 'visi'
        ]);
    }
    public function misi()
    {
        return view('dashboard.misi', [
            'misis' => Misi::all(),
            'active' => 'misi'
        ]);
    }
    public function tujuan()
    {
        return view('dashboard.tujuan', [
            'tujuans' => Tujuan::all(),
            'active' => 'tujuan'
        ]);
    }
    public function program()
    {
        return view('dashboard.program', [
            'programs' => Program::all(),
            'active' => 'program'
        ]);
    }
    public function fasilitas()
    {
        return view('dashboard.fasilitas', [
            'fasilitass' => Fasilitas::all(),
            'active' => 'fasilitas'
        ]);
    }
    public function fotoEkstrakulikuler()
    {
        return view('dashboard.foto-ekstrakulikuler', [
            'fotoEkstrakulikulers' => FotoEkstrakulikuler::all(),
            'active' => 'foto ekstrakulikuler'
        ]);
    }
    public function ekstrakulikuler()
    {
        return view('dashboard.Ekstrakulikuler', [
            'ekstrakulikulers' => Ekstrakulikuler::all(),
            'active' => 'ekstrakulikuler'
        ]);
    }
    public function fotoPrestasi()
    {
        return view('dashboard.prestasi', [
            'fotoPrestasis' => FotoPrestasi::all(),
            'active' => 'foto prestasi'
        ]);
    }
    public function prestasi()
    {
        return view('dashboard.prestasi', [
            'prestasis' => Prestasi::all(),
            'active' => 'prestasi'
        ]);
    }
    public function kegiatan()
    {
        return view('dashboard.kegiatan', [
            'kegiatans' => Kegiatan::all(),
            'active' => 'kegiatan'
        ]);
    }
    public function kontak()
    {
        return view('dashboard.kontak', [
            'kontak' => Kontak::latest()->get(),
            'active' => 'kontak'
        ]);
    }
}
