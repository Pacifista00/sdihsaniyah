<?php

namespace App\Http\Controllers;

use App\Models\Unggulan;
use Illuminate\Http\Request;

class ProgramUnggulanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
            ]);

            Unggulan::create([
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

        $unggulan = Unggulan::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        $unggulan->update($data);

        return redirect(url('/dashboard/kurikulum-program'))->with('success', 'Kurikulum berhasil diupdate.');
    }

    public function destroy($id)
    {
        $unggulan = Unggulan::findOrFail($id);

        $unggulan->delete();

        return redirect(url('/dashboard/kurikulum-program'))->with('success', 'Kurikulum berhasil dihapus.');
    }
}
