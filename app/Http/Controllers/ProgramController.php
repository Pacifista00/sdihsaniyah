<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $path = $request->file('foto')->store('programs', 'public');

            Program::create([
                'judul' => $request->judul,
                'foto' => $path
            ]);

            return redirect(url('/dashboard/program'))->with('success', 'Program berhasil ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $program = Program::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        if ($request->hasFile('foto')) {
            if ($program->foto && Storage::disk('public')->exists($program->foto)) {
                Storage::disk('public')->delete($program->foto);
            }
            $data['foto'] = $request->file('foto')->store('programs', 'public');
        }

        $program->update($data);

        return redirect(url('/dashboard/program'))->with('success', 'Program berhasil diupdate.');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        if ($program->foto && Storage::disk('public')->exists($program->foto)) {
            Storage::disk('public')->delete($program->foto);
        }

        $program->delete();

        return redirect(url('/dashboard/program'))->with('success', 'Program berhasil dihapus.');
    }
}
