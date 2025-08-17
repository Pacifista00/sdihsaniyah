<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'whatsapp' => 'required|string|max:255',
            'email' => 'required|email|string',
            'telepon' => 'required|string|max:255',
            'jam_kerja' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
        ]);

        $kontak = Kontak::findOrFail($id);

        $data = [
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'jam_kerja' => $request->jam_kerja,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
        ];

        $kontak->update($data);

        return redirect(url('/dashboard/kontak'))->with('success', 'Kontak berhasil diupdate.');
    }
}
