<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_E_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_e_1';

    protected $fillable = [
        'tahun_lulus',
        'jumlah_lulusan',
        'jumlah_lulusan_yang_terlacak',
        'jltbbt_lokal',
        'jltbbt_nasional',
        'jltbbt_multinasional',
    ];
}
