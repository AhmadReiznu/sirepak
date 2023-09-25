<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_1_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_1_1';

    protected $fillable = [
        'lembaga_mitra',
        'tingkat',
        'judul_kegiatan_kerjasama',
        'manfaat_bagi_ps_yang_diakreditasi',
        'waktu_dan_durasi',
        'bukti_kerjasama',
        'tahun_berakhirnya_kerjasama',
    ];
}
