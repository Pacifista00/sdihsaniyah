<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
            ]);

            Misi::create([
                'judul' => $request->judul
            ]);

            return redirect(url('/dashboard/misi-sekolah'))->with('success', 'Misi berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        $misi = Misi::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        $misi->update($data);

        return redirect(url('/dashboard/misi-sekolah'))->with('success', 'Misi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $misi = Misi::findOrFail($id);

        $misi->delete();

        return redirect(url('/dashboard/misi-sekolah'))->with('success', 'Misi berhasil dihapus.');
    }
}
