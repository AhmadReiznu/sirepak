<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_4_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_4_2';

    protected $fillable = [
        'jenis_publikasi',
        'jumlah_judul_ts_2',
        'jumlah_judul_ts_1',
        'jumlah_judul_ts',
        'jumlah',
    ];
}
