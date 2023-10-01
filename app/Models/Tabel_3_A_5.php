<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_A_5 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_a_5';

    protected $fillable = [
        'nama_dosen_ndustri',
        'nidk',
        'perusahaan',
        'pendidikan_tertinggi',
        'bidang_keahlian',
        'sertifikat_profesi',
        'mata_kuliah_yang_diampu',
        'sks',
    ];
}
