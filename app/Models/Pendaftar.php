<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'angkatan_id',
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
        'berkas_kk',
        'berkas_akta',
        'foto',
        'status',
        'berkas_psikotes',
    ];

    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class);
    }
}
