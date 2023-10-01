<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_5_C extends Model
{
    use HasFactory;

    protected $table = 'tabel_5_c';

    protected $fillable = [
        'aspek_yang_diukur',
        'tkm_sangat_baik',
        'tkm_baik',
        'tkm_cukup',
        'tkm_kurang',
        'rencana_tindak_lanjut_oleh_ps',
    ];
}
