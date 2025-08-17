<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'judul',
        'tanggal',
        'deskripsi'
    ];
}
