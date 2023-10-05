<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_F_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_f_2';

    protected $fillable = [
        'nama_mahasiswa',
        'judul_artikel_yang_disitasi',
        'jumlah_sitasi',
    ];
}
