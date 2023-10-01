<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_A extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_a';

    protected $fillable = [
        'tahun_lulus',
        'jumlah_lulusan',
        'ipk_min',
        'ipk_rata_rata',
        'ipk_maks',
    ];
}
