<?php

namespace App\Http\Controllers;

use App\Models\PrestasiSection;
use Illuminate\Http\Request;

class PrestasiSectionController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $prestasiSection = PrestasiSection::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $prestasiSection->update($data);

        return redirect(url('/dashboard/prestasi-section'))->with('success', 'Prestasi section berhasil diupdate.');
    }
}
