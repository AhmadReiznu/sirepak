<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_B_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_b_1';

    protected $fillable = [
        'nama_kegiatan',
        'waktu_perolehan',
        'tingkat',
        'prestasi_yang_dicapai',
    ];
}
