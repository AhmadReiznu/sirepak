<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_7_1 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_7_1';

    protected $fillable = [
        'luaran_penelitian_dan_pkm',
        'tahun',
        'keterangan',
    ];
}
