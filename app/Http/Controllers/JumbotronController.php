<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;
use Illuminate\Support\Facades\Storage;

class JumbotronController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $path = $request->file('foto')->store('jumbotrons', 'public');

            Jumbotron::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $path
            ]);

            return redirect(url('/dashboard/jumbotron'))->with('success', 'Jumbotron berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $jumbotron = Jumbotron::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        if ($request->hasFile('foto')) {
            if ($jumbotron->foto && Storage::disk('public')->exists($jumbotron->foto)) {
                Storage::disk('public')->delete($jumbotron->foto);
            }
            $data['foto'] = $request->file('foto')->store('jumbotrons', 'public');
        }

        $jumbotron->update($data);

        return redirect(url('/dashboard/jumbotron'))->with('success', 'Jumbotron berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);

        if ($jumbotron->foto && Storage::disk('public')->exists($jumbotron->foto)) {
            Storage::disk('public')->delete($jumbotron->foto);
        }

        $jumbotron->delete();

        return redirect(url('/dashboard/jumbotron'))->with('success', 'Jumbotron berhasil dihapus.');
    }
}
