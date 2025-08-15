<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
            ]);

            Tujuan::create([
                'judul' => $request->judul
            ]);

            return redirect(url('/dashboard/tujuan'))->with('success', 'Tujuan berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        $tujuan = Tujuan::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        $tujuan->update($data);

        return redirect(url('/dashboard/tujuan'))->with('success', 'Tujuan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $tujuan = Tujuan::findOrFail($id);

        $tujuan->delete();

        return redirect(url('/dashboard/tujuan'))->with('success', 'Tujuan berhasil dihapus.');
    }
}
