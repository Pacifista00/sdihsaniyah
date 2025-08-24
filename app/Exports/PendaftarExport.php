<?php

namespace App\Exports;

use App\Models\Pendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PendaftarExport implements FromCollection, WithHeadings, WithMapping
{
    private $rowNumber = 0;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Pendaftar::with('angkatan')->get();
    }
    public function map($pendaftar): array
    {
        // Tambahkan nomor urut, lalu inkrementasi
        $this->rowNumber++;

        $formattedTanggalLahir = \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->translatedFormat('d F Y');
        $formattedTanggalLahirAyah = \Carbon\Carbon::parse($pendaftar->tanggal_lahir_ayah)->translatedFormat('d F Y');
        $formattedTanggalLahirIbu = \Carbon\Carbon::parse($pendaftar->tanggal_lahir_ibu)->translatedFormat('d F Y');
        $formattedTanggalPendaftaran = \Carbon\Carbon::parse($pendaftar->created_at)->translatedFormat('d F Y');

        return [
            $this->rowNumber, // Nomor urut di kolom pertama
            $pendaftar->nik,
            $pendaftar->nisn,
            $pendaftar->nama_lengkap,
            $pendaftar->nama_panggilan,
            $pendaftar->tempat_lahir,
            $formattedTanggalLahir,
            $pendaftar->jenis_kelamin,
            $pendaftar->agama,
            $pendaftar->anak_ke,
            $pendaftar->jumlah_saudara,
            $pendaftar->bahasa,
            $pendaftar->berat,
            $pendaftar->tinggi,
            $pendaftar->riwayat_penyakit,
            $pendaftar->hobi,
            $pendaftar->bakat,
            $pendaftar->alamat,
            $pendaftar->angkatan->angkatan,
            $pendaftar->jenis_kelas,
            $pendaftar->asal_pendidikan,
            $pendaftar->nama_sekolah,
            $pendaftar->alamat_sekolah,
            $pendaftar->nama_ayah,
            $pendaftar->nik_ayah,
            $pendaftar->tempat_lahir_ayah,
            $formattedTanggalLahirAyah,
            $pendaftar->pendidikan_ayah,
            $pendaftar->pekerjaan_ayah,
            $pendaftar->penghasilan_ayah,
            $pendaftar->alamat_ayah,
            $pendaftar->no_telepon_ayah,
            $pendaftar->email_ayah,
            $pendaftar->nama_ibu,
            $pendaftar->nik_ibu,
            $pendaftar->tempat_lahir_ibu,
            $formattedTanggalLahirIbu,
            $pendaftar->pendidikan_ibu,
            $pendaftar->pekerjaan_ibu,
            $pendaftar->penghasilan_ibu,
            $pendaftar->alamat_ibu,
            $pendaftar->no_telepon_ibu,
            $pendaftar->email_ibu,
            $formattedTanggalPendaftaran,
        ];
    }

    public function headings(): array
    {
        return [
            'No.', // Judul kolom untuk nomor urut
            'NIK',
            'NISN',
            'Nama Lengkap',
            'Nama Panggilan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'Anak ke',
            'Jumlah Saudara',
            'Bahasa',
            'Berat',
            'Tinggi',
            'Riwayat Penyakit',
            'Hobi',
            'Bakat',
            'Alamat',
            'Angkatan',
            'Jenis Kelas',
            'Asal Pendidikan',
            'Nama Sekolah Asal',
            'Alamat Sekolah Asal',
            'Nama Ayah',
            'NIK Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Alamat Ayah',
            'No Telepon Ayah',
            'Email Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Alamat Ibu',
            'No Telepon Ibu',
            'Email Ibu',
            'Tanggal Pendaftaran',
        ];
    }
}
