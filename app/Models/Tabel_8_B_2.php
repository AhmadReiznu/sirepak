<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_B_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_b_2';

    protected $fillable = [
        'nama_kegiatan',
        'waktu_perolehan',
        'tingkat',
        'prestasi_yang_dicapai',
    ];
}
