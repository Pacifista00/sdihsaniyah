<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use App\Models\Jumbotron;
use App\Models\Kurikulum;
use App\Models\Misi;
use App\Models\Pertanyaan;
use App\Models\PrestasiSection;
use App\Models\Profil;
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
}
