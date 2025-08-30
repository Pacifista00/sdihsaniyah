<?php

namespace App\Exports;

use App\Models\Pendaftar;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PendaftarExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    private $rowNumber = 0;
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $idAngkatan;

    public function __construct($idAngkatan = null)
    {
        $this->idAngkatan = $idAngkatan;
        \Carbon\Carbon::setLocale('id');
        setlocale(LC_TIME, 'id_ID.utf8', 'id_ID', 'id');
    }
    public function collection()
    {
        if ($this->idAngkatan) {
            return Pendaftar::with('angkatan')
                ->where('angkatan_id', $this->idAngkatan)
                ->get();
        }

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
            // Baris pertama untuk grouping
            [
                'No.',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Anak',
                'Data Sekolah Asal',
                'Data Sekolah Asal',
                'Data Sekolah Asal',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ayah',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Data Ibu',
                'Tanggal Pendaftaran'
            ],
            // Baris kedua untuk nama kolom
            [
                'No.',
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
            ]
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Merge cell untuk grouping di row 1
        $sheet->mergeCells('B1:S1'); // Data Anak
        $sheet->mergeCells('T1:V1'); // Data Sekolah Asal
        $sheet->mergeCells('W1:AG1'); // Data Ayah
        $sheet->mergeCells('AH1:AQ1'); // Data Ibu
        $sheet->mergeCells('A1:A2'); // No.
        $sheet->mergeCells('AR1:AR2'); // Tanggal Pendaftaran

        return [
            1 => ['font' => ['bold' => true]], // Baris 1 bold
            2 => ['font' => ['bold' => true]], // Baris 2 bold
        ];
    }
}
