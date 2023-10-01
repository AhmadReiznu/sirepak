<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_3_B_5 extends Model
{
    use HasFactory;

    protected $table = 'tabel_3_b_5';

    protected $fillable = [
        'nama_dosen',
        'judul_artikel_yang_disitasi',
        'jumlah_sitasi',
    ];
}
