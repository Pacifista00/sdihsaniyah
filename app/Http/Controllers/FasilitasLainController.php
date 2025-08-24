<?php

namespace App\Http\Controllers;

use App\Models\FasilitasLainnya;
use Illuminate\Http\Request;

class FasilitasLainController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
            ]);

            FasilitasLainnya::create([
                'judul' => $request->judul
            ]);

            return redirect(url('/dashboard/fasilitas-lainnya'))->with('success', 'Fasilitas berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        $fasilitas = FasilitasLainnya::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        $fasilitas->update($data);

        return redirect(url('/dashboard/fasilitas-lainnya'))->with('success', 'Fasilitas berhasil diupdate.');
    }

    public function destroy($id)
    {
        $fasilitas = FasilitasLainnya::findOrFail($id);

        $fasilitas->delete();

        return redirect(url('/dashboard/fasilitas-lainnya'))->with('success', 'Fasilitas berhasil dihapus.');
    }
}
