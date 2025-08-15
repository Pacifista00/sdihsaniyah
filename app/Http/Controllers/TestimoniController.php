<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'sebagai' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $path = $request->file('foto')->store('testimonis', 'public');

            Testimoni::create([
                'nama' => $request->nama,
                'sebagai' => $request->sebagai,
                'deskripsi' => $request->deskripsi,
                'foto' => $path
            ]);

            return redirect(url('/dashboard/testimoni'))->with('success', 'Testimoni berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'sebagai' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $testimoni = Testimoni::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'sebagai' => $request->sebagai,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            if ($testimoni->foto && Storage::disk('public')->exists($testimoni->foto)) {
                Storage::disk('public')->delete($testimoni->foto);
            }
            $data['foto'] = $request->file('foto')->store('testimonis', 'public');
        }

        $testimoni->update($data);

        return redirect(url('/dashboard/testimoni'))->with('success', 'Testimoni berhasil diupdate.');
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        if ($testimoni->foto && Storage::disk('public')->exists($testimoni->foto)) {
            Storage::disk('public')->delete($testimoni->foto);
        }

        $testimoni->delete();

        return redirect(url('/dashboard/testimoni'))->with('success', 'Testimoni berhasil dihapus.');
    }
}
