<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_D_1_C extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_d_1_c';

    protected $fillable = [
        'tahun_lulus',
        'jumlah_lulusan',
        'jumlah_lulusan_yang_terlacak',
        'jltwtmp_wt_3_bulan',
        'jltwtmp_3_wt_6_bulan',
        'jltwtmp_wt_6_bulan',
    ];
}
