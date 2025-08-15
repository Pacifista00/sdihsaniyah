<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $path = $request->file('foto')->store('fasilitas', 'public');

            Fasilitas::create([
                'judul' => $request->judul,
                'foto' => $path
            ]);

            return redirect(url('/dashboard/fasilitas'))->with('success', 'Fasilitas berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fasilitas = Fasilitas::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        if ($request->hasFile('foto')) {
            if ($fasilitas->foto && Storage::disk('public')->exists($fasilitas->foto)) {
                Storage::disk('public')->delete($fasilitas->foto);
            }
            $data['foto'] = $request->file('foto')->store('fasilitas', 'public');
        }

        $fasilitas->update($data);

        return redirect(url('/dashboard/fasilitas'))->with('success', 'Fasilitas berhasil diupdate.');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        if ($fasilitas->foto && Storage::disk('public')->exists($fasilitas->foto)) {
            Storage::disk('public')->delete($fasilitas->foto);
        }

        $fasilitas->delete();

        return redirect(url('/dashboard/fasilitas'))->with('success', 'Fasilitas berhasil dihapus.');
    }
}
