<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_7 extends Model
{
    use HasFactory;

    protected $table = 'tabel_7';

    protected $fillable = [
        'nama_dosen',
        'tema_pkm_sesuai_roadmap',
        'nama_mahasiswa',
        'judul_kegiatan',
        'tahun',
    ];
}
