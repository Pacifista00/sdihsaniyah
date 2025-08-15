<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use App\Models\Kurikulum;
use App\Models\Pertanyaan;
use App\Models\PrestasiSection;
use App\Models\Profil;
use App\Models\Testimoni;
use App\Models\Unggulan;
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
            'active' => 'testimoni'
        ]);
    }
}
