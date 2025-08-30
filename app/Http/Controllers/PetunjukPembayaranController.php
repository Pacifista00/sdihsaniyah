<?php

namespace App\Http\Controllers;

use App\Models\PetunjukPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetunjukPembayaranController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required'
        ]);

        $petunjuk = PetunjukPembayaran::findOrFail($id);

        $data = [
            'deskripsi' => $request->deskripsi
        ];

        if ($request->hasFile('foto')) {
            if ($petunjuk->foto && Storage::disk('public')->exists($petunjuk->foto)) {
                Storage::disk('public')->delete($petunjuk->foto);
            }
            $data['foto'] = $request->file('foto')->store('petunjuk-pembayaran', 'public');
        }

        $petunjuk->update($data);

        return redirect(url('/dashboard/petunjuk-pembayaran'))->with('success', 'Data berhasil diupdate.');
    }
}
