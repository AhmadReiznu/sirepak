<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_F_3 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_f_3';

    protected $fillable = [
        'nama_mahasiswa',
        'nama_produk_jasa',
        'deskripsi_produk_jasa',
        'bukti',
        'tahun',
    ];
}
