<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
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
