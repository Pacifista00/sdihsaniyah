<?php

namespace App\Http\Controllers;

use App\Models\FotoPrestasi;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function updateFoto(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotoPrestasi = FotoPrestasi::findOrFail($id);

        $data = [];

        if ($request->hasFile('foto')) {
            if ($fotoPrestasi->foto && Storage::disk('public')->exists($fotoPrestasi->foto)) {
                Storage::disk('public')->delete($fotoPrestasi->foto);
            }
            $data['foto'] = $request->file('foto')->store('prestasis', 'public');
        }

        $fotoPrestasi->update($data);

        return redirect(url('/dashboard/foto-prestasi'))->with('success', 'Foto berhasil diupdate.');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'kategori' => 'required|string|max:255',
            ]);

            Prestasi::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori
            ]);

            return redirect(url('/dashboard/prestasi'))->with('success', 'Prestasi berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);

        $prestasi = Prestasi::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
        ];

        $prestasi->update($data);

        return redirect(url('/dashboard/prestasi'))->with('success', 'Prestasi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $prestasi->delete();

        return redirect(url('/dashboard/prestasi'))->with('success', 'Prestasi berhasil dihapus.');
    }
}
