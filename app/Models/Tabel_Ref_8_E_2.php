<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_Ref_8_E_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_ref_8_e_2';

    protected $fillable = [
        'tahun_lulus',
        'jumlah_lulusan',
        'jumlah_tanggapan_kepuasan_pengguna_yang_terlacak',
    ];
}
