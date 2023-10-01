<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_3 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_3';

    protected $fillable = [
        'sumber_pembiayaan',
        'jumlah_judul_pkm_ts_2',
        'jumlah_judul_pkm_ts_1',
        'jumlah_judul_pkm_ts',
        'jumlah',
    ];
}
