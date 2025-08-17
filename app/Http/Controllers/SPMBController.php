<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\FacadesStorage;

class SPMBController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'nik' => 'required|string|max:20|unique:pendaftars,nik',
            'nisn' => 'string|max:20|unique:pendaftars,nisn',
            'nama_lengkap' => 'required|string|max:100',
            'nama_panggilan' => 'string|max:50',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'agama' => 'required|in:islam,kristen,katolik,hindu,buddha,konghucu',
            'anak_ke' => 'integer',
            'jumlah_saudara' => 'integer',
            'bahasa' => 'string|max:50',
            'berat' => 'numeric',
            'tinggi' => 'numeric',
            'riwayat_penyakit' => 'string|max:100',
            'hobi' => 'string|max:100',
            'bakat' => 'string|max:100',
            'alamat' => 'string',
            'jenis_kelas' => 'required|in:intensif,bilingual',
            'asal_pendidikan' => 'required|in:tk,kb,ra,sps,tpa,paud',
            'nama_sekolah' => 'string|max:100',
            'alamat_sekolah' => 'string',

            // Data Ayah
            'nama_ayah' => 'string|max:100',
            'nik_ayah' => 'string|max:20',
            'tempat_lahir_ayah' => 'string|max:50',
            'tanggal_lahir_ayah' => 'date',
            'pendidikan_ayah' => 'string|max:50',
            'pekerjaan_ayah' => 'string|max:50',
            'penghasilan_ayah' => 'numeric',
            'alamat_ayah' => 'string',
            'no_telepon_ayah' => 'string|max:20',
            'email_ayah' => 'email',

            // Data Ibu
            'nama_ibu' => 'string|max:100',
            'nik_ibu' => 'string|max:20',
            'tempat_lahir_ibu' => 'string|max:50',
            'tanggal_lahir_ibu' => 'date',
            'pendidikan_ibu' => 'string|max:50',
            'pekerjaan_ibu' => 'string|max:50',
            'penghasilan_ibu' => 'numeric',
            'alamat_ibu' => 'string',
            'no_telepon_ibu' => 'string|max:20',
            'email_ibu' => 'email',

            // Berkas
            'berkas_kk' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            'berkas_akta' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            'foto' => 'file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $data = [
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'jumlah_saudara' => $request->jumlah_saudara,
            'bahasa' => $request->bahasa,
            'berat' => $request->berat,
            'tinggi' => $request->tinggi,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'hobi' => $request->hobi,
            'bakat' => $request->bakat,
            'alamat' => $request->alamat,
            'jenis_kelas' => $request->jenis_kelas,
            'asal_pendidikan' => $request->asal_pendidikan,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,

            // Data Ayah
            'nama_ayah' => $request->nama_ayah,
            'nik_ayah' => $request->nik_ayah,
            'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'alamat_ayah' => $request->alamat_ayah,
            'no_telepon_ayah' => $request->no_telepon_ayah,
            'email_ayah' => $request->email_ayah,

            // Data Ibu
            'nama_ibu' => $request->nama_ibu,
            'nik_ibu' => $request->nik_ibu,
            'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'alamat_ibu' => $request->alamat_ibu,
            'no_telepon_ibu' => $request->no_telepon_ibu,
            'email_ibu' => $request->email_ibu,

            // Berkas
            'berkas_kk' => $request->hasFile('berkas_kk')
                ? $request->file('berkas_kk')->store('pendaftar/kk', 'public')
                : null,
            'berkas_akta' => $request->hasFile('berkas_akta')
                ? $request->file('berkas_akta')->store('pendaftar/akta', 'public')
                : null,
            'foto' => $request->hasFile('foto')
                ? $request->file('foto')->store('pendaftar/foto', 'public')
                : null,
        ];

        // 3. Simpan ke database
        Pendaftar::create($data);

        // 4. Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan!');
    }
    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        // 1. Validasi input
        $validated = $request->validate([
            'nik' => 'required|string|max:20|unique:pendaftars,nik,' . $id,
            'nisn' => 'nullable|string|max:20|unique:pendaftars,nisn,' . $id,
            'nama_lengkap' => 'required|string|max:100',
            'nama_panggilan' => 'nullable|string|max:50',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'agama' => 'required|in:islam,kristen,katolik,hindu,buddha,konghucu',
            'anak_ke' => 'nullable|integer',
            'jumlah_saudara' => 'nullable|integer',
            'bahasa' => 'nullable|string|max:50',
            'berat' => 'nullable|numeric',
            'tinggi' => 'nullable|numeric',
            'riwayat_penyakit' => 'nullable|string|max:100',
            'hobi' => 'nullable|string|max:100',
            'bakat' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'jenis_kelas' => 'required|in:intensif,bilingual',
            'asal_pendidikan' => 'required|in:tk,kb,ra,sps,tpa,paud',
            'nama_sekolah' => 'nullable|string|max:100',
            'alamat_sekolah' => 'nullable|string',

            // Data Ayah
            'nama_ayah' => 'nullable|string|max:100',
            'nik_ayah' => 'nullable|string|max:20',
            'tempat_lahir_ayah' => 'nullable|string|max:50',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pendidikan_ayah' => 'nullable|string|max:50',
            'pekerjaan_ayah' => 'nullable|string|max:50',
            'penghasilan_ayah' => 'nullable|numeric',
            'alamat_ayah' => 'nullable|string',
            'no_telepon_ayah' => 'nullable|string|max:20',
            'email_ayah' => 'nullable|email',

            // Data Ibu
            'nama_ibu' => 'nullable|string|max:100',
            'nik_ibu' => 'nullable|string|max:20',
            'tempat_lahir_ibu' => 'nullable|string|max:50',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pendidikan_ibu' => 'nullable|string|max:50',
            'pekerjaan_ibu' => 'nullable|string|max:50',
            'penghasilan_ibu' => 'nullable|numeric',
            'alamat_ibu' => 'nullable|string',
            'no_telepon_ibu' => 'nullable|string|max:20',
            'email_ibu' => 'nullable|email',

            // Berkas
            'berkas_kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'berkas_akta' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 2. Data update
        $data = $request->only([
            'nik',
            'nisn',
            'nama_lengkap',
            'nama_panggilan',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',
            'anak_ke',
            'jumlah_saudara',
            'bahasa',
            'berat',
            'tinggi',
            'riwayat_penyakit',
            'hobi',
            'bakat',
            'alamat',
            'jenis_kelas',
            'asal_pendidikan',
            'nama_sekolah',
            'alamat_sekolah',
            'nama_ayah',
            'nik_ayah',
            'tempat_lahir_ayah',
            'tanggal_lahir_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'alamat_ayah',
            'no_telepon_ayah',
            'email_ayah',
            'nama_ibu',
            'nik_ibu',
            'tempat_lahir_ibu',
            'tanggal_lahir_ibu',
            'pendidikan_ibu',
            'pekerjaan_ibu',
            'penghasilan_ibu',
            'alamat_ibu',
            'no_telepon_ibu',
            'email_ibu',
        ]);

        // 3. File upload jika ada
        if ($request->hasFile('berkas_kk')) {
            // Hapus file lama jika ada
            if (!empty($pendaftar->berkas_kk) && Storage::disk('public')->exists($pendaftar->berkas_kk)) {
                Storage::disk('public')->delete($pendaftar->berkas_kk);
            }

            // Simpan file baru
            $data['berkas_kk'] = $request->file('berkas_kk')->store('pendaftar/kk', 'public');
        }

        if ($request->hasFile('berkas_akta')) {
            if (!empty($pendaftar->berkas_akta) && Storage::disk('public')->exists($pendaftar->berkas_akta)) {
                Storage::disk('public')->delete($pendaftar->berkas_akta);
            }

            $data['berkas_akta'] = $request->file('berkas_akta')->store('pendaftar/akta', 'public');
        }

        if ($request->hasFile('foto')) {
            if (!empty($pendaftar->foto) && Storage::disk('public')->exists($pendaftar->foto)) {
                Storage::disk('public')->delete($pendaftar->foto);
            }

            $data['foto'] = $request->file('foto')->store('pendaftar/foto', 'public');
        }


        // 4. Update ke database
        $pendaftar->update($data);

        // 5. Redirect
        return redirect()->back()->with('success', 'Data pendaftar berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        // Hapus file lama kalau ada
        if ($pendaftar->berkas_kk && Storage::disk('public')->exists($pendaftar->berkas_kk)) {
            Storage::disk('public')->delete($pendaftar->berkas_kk);
        }

        if ($pendaftar->berkas_akta && Storage::disk('public')->exists($pendaftar->berkas_akta)) {
            Storage::disk('public')->delete($pendaftar->berkas_akta);
        }

        if ($pendaftar->foto && Storage::disk('public')->exists($pendaftar->foto)) {
            Storage::disk('public')->delete($pendaftar->foto);
        }

        // Hapus record dari database
        $pendaftar->delete();

        return redirect()->back()->with('success', 'Data pendaftar berhasil dihapus!');
    }
}
