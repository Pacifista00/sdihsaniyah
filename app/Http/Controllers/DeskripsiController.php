<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
        ]);

        $deskripsi = Deskripsi::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $deskripsi->update($data);

        return redirect(url('/dashboard/deskripsi'))->with('success', 'Deskripsi berhasil diupdate.');
    }
}
