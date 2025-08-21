<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'tanggal' => 'required',
                'unggulan' => 'required',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'foto2' => 'image|mimes:jpg,jpeg,png|max:2048',
                'foto3' => 'image|mimes:jpg,jpeg,png|max:2048',
                'foto4' => 'image|mimes:jpg,jpeg,png|max:2048',
                'foto5' => 'image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $path = $request->file('foto')->store('kegiatans', 'public');

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'foto' => $path,
                'unggulan' => $request->unggulan
            ];

            if ($request->hasFile('foto2')) {
                $data['foto2'] = $request->file('foto2')->store('kegiatans', 'public');
            }
            if ($request->hasFile('foto3')) {
                $data['foto3'] = $request->file('foto3')->store('kegiatans', 'public');
            }
            if ($request->hasFile('foto4')) {
                $data['foto4'] = $request->file('foto4')->store('kegiatans', 'public');
            }
            if ($request->hasFile('foto5')) {
                $data['foto5'] = $request->file('foto5')->store('kegiatans', 'public');
            }

            Kegiatan::create($data);

            return redirect(url('/dashboard/kegiatan'))->with('success', 'Kegiatan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required',
            'unggulan' => 'required',
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
            'foto2' => 'image|mimes:jpg,jpeg,png|max:2048',
            'foto3' => 'image|mimes:jpg,jpeg,png|max:2048',
            'foto4' => 'image|mimes:jpg,jpeg,png|max:2048',
            'foto5' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $kegiatan = Kegiatan::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'unggulan' => $request->unggulan,
        ];

        if ($request->hasFile('foto')) {
            if ($kegiatan->foto && Storage::disk('public')->exists($kegiatan->foto)) {
                Storage::disk('public')->delete($kegiatan->foto);
            }
            $data['foto'] = $request->file('foto')->store('kegiatans', 'public');
        }
        if ($request->hasFile('foto2')) {
            if ($kegiatan->foto2 && Storage::disk('public')->exists($kegiatan->foto2)) {
                Storage::disk('public')->delete($kegiatan->foto2);
            }
            $data['foto2'] = $request->file('foto2')->store('kegiatans', 'public');
        }
        if ($request->hasFile('foto3')) {
            if ($kegiatan->foto3 && Storage::disk('public')->exists($kegiatan->foto3)) {
                Storage::disk('public')->delete($kegiatan->foto3);
            }
            $data['foto3'] = $request->file('foto3')->store('kegiatans', 'public');
        }
        if ($request->hasFile('foto4')) {
            if ($kegiatan->foto4 && Storage::disk('public')->exists($kegiatan->foto4)) {
                Storage::disk('public')->delete($kegiatan->foto4);
            }
            $data['foto4'] = $request->file('foto4')->store('kegiatans', 'public');
        }
        if ($request->hasFile('foto5')) {
            if ($kegiatan->foto5 && Storage::disk('public')->exists($kegiatan->foto5)) {
                Storage::disk('public')->delete($kegiatan->foto5);
            }
            $data['foto5'] = $request->file('foto5')->store('kegiatans', 'public');
        }

        $kegiatan->update($data);

        return redirect(url('/dashboard/kegiatan'))->with('success', 'Kegiatan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->foto && Storage::disk('public')->exists($kegiatan->foto)) {
            Storage::disk('public')->delete($kegiatan->foto);
        } elseif ($kegiatan->foto2 && Storage::disk('public')->exists($kegiatan->foto2)) {
            Storage::disk('public')->delete($kegiatan->foto2);
        } elseif ($kegiatan->foto3 && Storage::disk('public')->exists($kegiatan->foto3)) {
            Storage::disk('public')->delete($kegiatan->foto3);
        } elseif ($kegiatan->foto4 && Storage::disk('public')->exists($kegiatan->foto4)) {
            Storage::disk('public')->delete($kegiatan->foto4);
        } elseif ($kegiatan->foto5 && Storage::disk('public')->exists($kegiatan->foto5)) {
            Storage::disk('public')->delete($kegiatan->foto5);
        }

        $kegiatan->delete();

        return redirect(url('/dashboard/kegiatan'))->with('success', 'Kegiatan berhasil dihapus.');
    }
}
