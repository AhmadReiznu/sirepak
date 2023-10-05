<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_8_E_2 extends Model
{
    use HasFactory;

    protected $table = 'tabel_8_e_2';

    protected $fillable = [
        'jenis_kemampuan',
        'tkp_sangat_baik',
        'tkp_baik',
        'tkp_cukup',
        'tkp_kurang',
        'rencana_tindak_lanjut_oleh_ps',
    ];
}
