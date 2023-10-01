<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_5_B extends Model
{
    use HasFactory;

    protected $table = 'tabel_5_b';

    protected $fillable = [
        'judul_penelitian_pkm',
        'nama_dosen',
        'mata_kuliah',
        'bentuk_integrasi',
        'tahun',
    ];
}
