<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'whatsapp',
        'email',
        'telepon',
        'jam_kerja',
        'instagram',
        'facebook',
        'youtube',
    ];
}
