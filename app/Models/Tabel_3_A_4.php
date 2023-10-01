<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_A_4 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_a_4';

    protected $fillable = [
        'nama_dosen',
        'nidn',
        'pendidikan_pasca_parjana',
        'bidang_keahlian',
        'jabatan_akademik',
        'sertifikat_pendidik_profesional',
        'sertifikat_kompetensi',
        'mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi',
        'kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu',
    ];
}
