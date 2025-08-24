<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    public function exportForm($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        $pdf = Pdf::loadView('pdf.pendaftaran', compact('pendaftar'))
            ->setPaper('f4', 'portrait'); // bisa ganti ke f4 kalau perlu

        return $pdf->download('formulir-ppdb-' . $pendaftar->nama_lengkap . '.pdf');
    }
}
