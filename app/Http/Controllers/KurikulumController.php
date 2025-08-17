<?php

namespace App\Http\Controllers;

use App\Models\FotoKurikulum;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KurikulumController extends Controller
{
    public function updateFoto(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotokurikulum = FotoKurikulum::findOrFail($id);

        $data = [];

        if ($request->hasFile('foto')) {
            if ($fotokurikulum->foto && Storage::disk('public')->exists($fotokurikulum->foto)) {
                Storage::disk('public')->delete($fotokurikulum->foto);
            }
            $data['foto'] = $request->file('foto')->store('kurikulums', 'public');
        }

        $fotokurikulum->update($data);

        return redirect(url('/dashboard/foto-kurikulum-program'))->with('success', 'Foto berhasil diupdate.');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
            ]);

            Kurikulum::create([
                'judul' => $request->judul,
            ]);

            return redirect(url('/dashboard/kurikulum-program'))->with('success', 'Kurikulum berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        $kurikulum = Kurikulum::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        $kurikulum->update($data);

        return redirect(url('/dashboard/kurikulum-program'))->with('success', 'Kurikulum berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);

        $kurikulum->delete();

        return redirect(url('/dashboard/kurikulum-program'))->with('success', 'Kurikulum berhasil dihapus.');
    }
}
