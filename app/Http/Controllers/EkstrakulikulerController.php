<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\FotoEkstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
{
    public function updateFoto(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotoEkskul = FotoEkstrakulikuler::findOrFail($id);

        $data = [];

        if ($request->hasFile('foto')) {
            if ($fotoEkskul->foto && Storage::disk('public')->exists($fotoEkskul->foto)) {
                Storage::disk('public')->delete($fotoEkskul->foto);
            }
            $data['foto'] = $request->file('foto')->store('ekskuls', 'public');
        }

        $fotoEkskul->update($data);

        return redirect(url('/dashboard/foto-ekstrakulikuler'))->with('success', 'Foto berhasil diupdate.');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'kategori' => 'required|string|max:255',
            ]);

            Ekstrakulikuler::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori
            ]);

            return redirect(url('/dashboard/ekstrakulikuler'))->with('success', 'Ekstrakulikuler berhasil ditambahkan.');

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

        $ekskul = Ekstrakulikuler::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
        ];

        $ekskul->update($data);

        return redirect(url('/dashboard/ekstrakulikuler'))->with('success', 'Ekstrakulikuler berhasil diupdate.');
    }

    public function destroy($id)
    {
        $ekskul = Ekstrakulikuler::findOrFail($id);

        $ekskul->delete();

        return redirect(url('/dashboard/ekstrakulikuler'))->with('success', 'Ekstrakulikuler berhasil dihapus.');
    }

}
