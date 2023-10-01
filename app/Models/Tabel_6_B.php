<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_6_B extends Model
{
    use HasFactory;

    protected $table = 'tabel_6_b';

    protected $fillable = [
        'nama_dosen',
        'tema_penelitian_sesuai_roadmap',
        'nama_mahasiswa',
        'judul_tesis',
        'tahun',
    ];
}
