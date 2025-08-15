<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $pertanyaan = Pertanyaan::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $pertanyaan->update($data);

        return redirect(url('/dashboard/pertanyaan'))->with('success', 'Pertanyaan section berhasil diupdate.');
    }
}
