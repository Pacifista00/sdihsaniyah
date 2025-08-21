<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;
use App\Models\FotoTentang;
use Illuminate\Support\Facades\Storage;

class DeskripsiController extends Controller
{
    public function updateFoto(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fototentang = FotoTentang::findOrFail($id);

        $data = [];

        if ($request->hasFile('foto')) {
            if ($fototentang->foto && Storage::disk('public')->exists($fototentang->foto)) {
                Storage::disk('public')->delete($fototentang->foto);
            }
            $data['foto'] = $request->file('foto')->store('tentangs', 'public');
        }

        $fototentang->update($data);

        return redirect(url('/dashboard/foto-tentang-kami'))->with('success', 'Foto berhasil diupdate.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
        ]);

        $deskripsi = Deskripsi::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $deskripsi->update($data);

        return redirect(url('/dashboard/deskripsi'))->with('success', 'Deskripsi berhasil diupdate.');
    }
}
