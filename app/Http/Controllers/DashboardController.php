<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Deskripsi;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\FasilitasLainnya;
use App\Models\Footer;
use App\Models\FotoEkstrakulikuler;
use App\Models\FotoKurikulum;
use App\Models\FotoPrestasi;
use App\Models\FotoTentang;
use App\Models\Jumbotron;
use App\Models\Kegiatan;
use App\Models\Kontak;
use App\Models\Kurikulum;
use App\Models\Misi;
use App\Models\Pendaftar;
use App\Models\Pertanyaan;
use App\Models\Pesan;
use App\Models\Prestasi;
use App\Models\PrestasiSection;
use App\Models\Profil;
use App\Models\Program;
use App\Models\Testimoni;
use App\Models\Tujuan;
use App\Models\Unggulan;
use App\Models\User;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function jumbotron()
    {
        return view('dashboard.jumbotron', [
            'loggedUser' => Auth::user(),
            'jumbotrons' => Jumbotron::latest()->get(),
            'active' => 'jumbotron'
        ]);
    }
    public function profil()
    {
        return view('dashboard.profil', [
            'loggedUser' => Auth::user(),
            'profil' => Profil::latest()->get(),
            'active' => 'profil'
        ]);
    }
    public function fotoKurikulumProgram()
    {
        return view('dashboard.foto-kurikulum', [
            'loggedUser' => Auth::user(),
            'fotoKurikulums' => FotoKurikulum::all(),
            'active' => 'foto kurikulum'
        ]);
    }
    public function kurikulumProgram()
    {
        return view('dashboard.kurikulum-program', [
            'loggedUser' => Auth::user(),
            'kurikulums' => Kurikulum::all(),
            'unggulans' => Unggulan::all(),
            'active' => 'kurikulum & program unggulan'
        ]);
    }
    public function prestasiSection()
    {
        return view('dashboard.prestasi-section', [
            'loggedUser' => Auth::user(),
            'prestasi' => PrestasiSection::latest()->get(),
            'active' => 'prestasi'
        ]);
    }
    public function testimoni()
    {
        return view('dashboard.testimoni', [
            'loggedUser' => Auth::user(),
            'testimonis' => Testimoni::latest()->get(),
            'active' => 'testimoni'
        ]);
    }
    public function pertanyaan()
    {
        return view('dashboard.pertanyaan', [
            'loggedUser' => Auth::user(),
            'pertanyaan' => Pertanyaan::latest()->get(),
            'active' => 'pertanyaan'
        ]);
    }
    public function fotoTentangKami()
    {
        return view('dashboard.foto-tentang', [
            'loggedUser' => Auth::user(),
            'fotoTentangs' => FotoTentang::all(),
            'active' => 'foto tentang kami'
        ]);
    }
    public function deskripsi()
    {
        return view('dashboard.deskripsi', [
            'loggedUser' => Auth::user(),
            'deskripsi' => Deskripsi::latest()->get(),
            'active' => 'deskripsi'
        ]);
    }
    public function visi()
    {
        return view('dashboard.visi', [
            'loggedUser' => Auth::user(),
            'visi' => Visi::latest()->get(),
            'active' => 'visi'
        ]);
    }
    public function misi()
    {
        return view('dashboard.misi', [
            'loggedUser' => Auth::user(),
            'misis' => Misi::all(),
            'active' => 'misi'
        ]);
    }
    public function tujuan()
    {
        return view('dashboard.tujuan', [
            'loggedUser' => Auth::user(),
            'tujuans' => Tujuan::all(),
            'active' => 'tujuan'
        ]);
    }
    public function program()
    {
        return view('dashboard.program', [
            'loggedUser' => Auth::user(),
            'programs' => Program::all(),
            'active' => 'program'
        ]);
    }
    public function fasilitas()
    {
        return view('dashboard.fasilitas', [
            'loggedUser' => Auth::user(),
            'fasilitass' => Fasilitas::all(),
            'active' => 'fasilitas'
        ]);
    }
    public function fasilitasLain()
    {
        return view('dashboard.fasilitas-lainnya', [
            'loggedUser' => Auth::user(),
            'fasilitass' => FasilitasLainnya::all(),
            'active' => 'fasilitas lain'
        ]);
    }
    public function fotoEkstrakulikuler()
    {
        return view('dashboard.foto-ekstrakulikuler', [
            'loggedUser' => Auth::user(),
            'fotoEkstrakulikulers' => FotoEkstrakulikuler::all(),
            'active' => 'foto ekstrakulikuler'
        ]);
    }
    public function ekstrakulikuler()
    {
        return view('dashboard.Ekstrakulikuler', [
            'loggedUser' => Auth::user(),
            'ekstrakulikulers' => Ekstrakulikuler::all(),
            'active' => 'ekstrakulikuler'
        ]);
    }
    public function fotoPrestasi()
    {
        return view('dashboard.foto-prestasi', [
            'loggedUser' => Auth::user(),
            'fotoPrestasi' => FotoPrestasi::all(),
            'active' => 'foto prestasi'
        ]);
    }
    public function prestasi()
    {
        return view('dashboard.prestasi', [
            'loggedUser' => Auth::user(),
            'prestasis' => Prestasi::paginate(10), // Gunakan paginasi
            'active' => 'prestasi'
        ]);
    }
    public function kegiatan(Request $request)
    {
        $search = $request->input('cari');

        $kegiatansQuery = Kegiatan::latest();

        if ($search) {
            $kegiatansQuery->where('judul', 'like', '%' . $search . '%');
        }

        $kegiatans = $kegiatansQuery->paginate(10);

        return view('dashboard.kegiatan', [
            'loggedUser' => Auth::user(),
            'kegiatans' => $kegiatans, // Tambahkan paginasi di sini
            'active' => 'kegiatan'
        ]);
    }
    public function kontak()
    {
        return view('dashboard.kontak', [
            'loggedUser' => Auth::user(),
            'kontak' => Kontak::latest()->get(),
            'active' => 'kontak'
        ]);
    }
    public function spmb(Request $request)
    {
        $search = $request->input('cari');

        $pendaftarsQuery = Pendaftar::latest();

        if ($search) {
            $pendaftarsQuery->where('nama_lengkap', 'like', '%' . $search . '%');
        }

        $pendaftars = $pendaftarsQuery->paginate(10);

        return view('dashboard.spmb', [
            'loggedUser' => Auth::user(),
            'pendaftars' => $pendaftars,
            'active' => 'spmb',
            'angkatan' => Angkatan::all()
        ]);
    }
    public function pesan()
    {
        return view('dashboard.pesan', [
            'loggedUser' => Auth::user(),
            'pesans' => Pesan::all(),
            'active' => 'pesan'
        ]);
    }
    public function ppdb()
    {
        return view('dashboard.ppdb', [
            'loggedUser' => Auth::user(),
            'ppdbs' => Angkatan::all(),
            'active' => 'ppdb'
        ]);
    }
    public function user()
    {
        return view('dashboard.user', [
            'loggedUser' => Auth::user(),
            'users' => User::all(),
            'active' => 'user'
        ]);
    }
    public function footer()
    {
        return view('dashboard.footer', [
            'loggedUser' => Auth::user(),
            'footer' => Footer::latest()->get(),
            'active' => 'footer'
        ]);
    }
}
