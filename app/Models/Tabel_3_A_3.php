<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_A_3 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_a_3';

    protected $fillable = [
        'nama_dosen',
        'dtps',
        'ewmp_pendidikan_ps_yang_diakreditasi',
        'ewmp_pendidikan_ps_lain_di_dalam_pt',
        'ewmp_pendidikan_ps_lain_di_luar_pt',
        'ewmp_penelitian',
        'ewmp_pkm',
        'ewmp_tugas_tambahan',
        'jumlah',
        'rata_rata_per_semester',
    ];
}
