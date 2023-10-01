<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_A_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_a_2';

    protected $fillable = [
        'nama_dosen',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts',
        'rata_rata_1',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1',
        'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts',
        'rata_rata_2',
        'rata_rata_jumlah_bimbingan_di_semua_program_semester',
    ];
}
