<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_D_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_d_2';

    protected $fillable = [
        'tahun_lulus',
        'jumlah_lulusan',
        'jumlah_lulusan_yang_terlacak',
        'jlttkbk_rendah',
        'jlttkbk_sedang',
        'jlttkbk_tinggi',
    ];
}
