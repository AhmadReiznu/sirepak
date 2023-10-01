<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_6 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_6';

    protected $fillable = [
        'nama_dosen',
        'nama_produk_jasa',
        'deskripsi_produk_jasa',
        'bukti',
        'tahun',
    ];
}
