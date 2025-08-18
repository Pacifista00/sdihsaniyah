<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'angkatan' => 'required|string|max:255',
                'total_kuota' => 'required',
                'kuota_tersisa' => 'required',
                'deskripsi' => 'required',
            ]);

            Angkatan::create([
                'angkatan' => $request->angkatan,
                'total_kuota' => $request->total_kuota,
                'kuota_tersisa' => $request->kuota_tersisa,
                'deskripsi' => $request->deskripsi
            ]);

            return redirect(url('/dashboard/ppdb'))->with('success', 'PPDB berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'angkatan' => 'required|string|max:255',
            'total_kuota' => 'required',
            'kuota_tersisa' => 'required',
            'deskripsi' => 'required',
        ]);

        $ppdb = Angkatan::findOrFail($id);

        $data = [
            'angkatan' => $request->angkatan,
            'total_kuota' => $request->total_kuota,
            'kuota_tersisa' => $request->kuota_tersisa,
            'deskripsi' => $request->deskripsi
        ];

        $ppdb->update($data);

        return redirect(url('/dashboard/ppdb'))->with('success', 'PPDB berhasil diupdate.');
    }

    public function destroy($id)
    {
        $ppdb = Angkatan::findOrFail($id);

        $ppdb->delete();

        return redirect(url('/dashboard/ppdb'))->with('success', 'PPDB berhasil dihapus.');
    }
}
