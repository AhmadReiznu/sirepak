<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_1';

    protected $fillable = [
        'nama_dosen',
        'bidang_keahlian',
        'rekognisi_dan_bukti_pendukung',
        'tingkat',
        'tahun',
    ];
}
