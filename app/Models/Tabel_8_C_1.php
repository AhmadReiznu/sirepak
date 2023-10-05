<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_C_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_c_1';

    protected $fillable = [
        'tahun_masuk',
        'jumlah_mahasiswa_diterima',
        'jml_akhir_ts_4',
        'jml_akhir_ts_3',
        'jml_akhir_ts_2',
        'jml_akhir_ts_1',
        'jml_akhir_ts',
        'jumlah_lulusan__akhir_ts',
        'rata_rata_masa_studi',
    ];
}
