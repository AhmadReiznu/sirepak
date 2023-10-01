<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_A_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_a_1';

    protected $fillable = [
        'nama_dosen',
        'nidn',
        'pendidikan_pasca_sarjana_magister',
        'pendidikan_pasca_sarjana_doktor',
        'bidang_keahlian',
        'kesesuaian_dengan_kompetensi_inti_ps',
        'jabatan_akademik',
        'sertifikat_pendidik_profesional',
        'sertifikat_kompetensi_profesi_industri',
        'mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi',
        'kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu',
        'mata_kuliah_yang_diampu_pada_ps_lain',
    ];
}
