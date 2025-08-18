<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'subjek' => 'required|string|max:255',
                'pesan' => 'required|string',
            ]);

            Pesan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'subjek' => $request->subjek,
                'pesan' => $request->pesan
            ]);

            return redirect(url('/'))->with('success', 'Pesan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        $pesan = Pesan::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ];

        $pesan->update($data);

        return redirect(url('/dashboard/pesan'))->with('success', 'Pesan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);

        $pesan->delete();

        return redirect(url('/dashboard/pesan'))->with('success', 'Pesan berhasil dihapus.');
    }
}
