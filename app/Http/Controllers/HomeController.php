<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'active' => 'index'
        ]);
    }
    public function tentangKami()
    {
        return view('tentang-kami', [
            'active' => 'tentang-kami'
        ]);
    }
    public function program()
    {
        return view('program', [
            'active' => 'program'
        ]);
    }
    public function fasilitas()
    {
        return view('fasilitas', [
            'active' => 'fasilitas'
        ]);
    }
    public function ekstrakulikuler()
    {
        return view('ekstrakulikuler', [
            'active' => 'ekstrakulikuler'
        ]);
    }
    public function prestasiSiswa()
    {
        return view('prestasi-siswa', [
            'active' => 'prestasi-siswa'
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
            'active' => 'kontak'
        ]);
    }
    public function spmb()
    {
        return view('spmb', [
            'active' => 'spmb'
        ]);
    }
}
