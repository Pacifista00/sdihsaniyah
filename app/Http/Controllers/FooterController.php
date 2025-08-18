<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi_sekolah' => 'required|string',
            'kalimat_ajakan' => 'required|string',
        ]);

        $footer = Profil::findOrFail($id);

        $data = [
            'deskripsi_sekolah' => $request->deskripsi_sekolah,
            'kalimat_ajakan' => $request->kalimat_ajakan
        ];

        $footer->update($data);

        return redirect(url('/dashboard/footer'))->with('success', 'Footer berhasil diupdate.');
    }
}
