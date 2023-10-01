<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_4 extends Model
{
    use HasFactory;

    protected $table = 'tabel_4';

    protected $fillable = [
        'jenis_penggunaan',
        'unit_pengelola_program_studi_ts_2',
        'unit_pengelola_program_studi_ts_1',
        'unit_pengelola_program_studi_ts',
        'rata_rata_1',
        'program_studi_ts_2',
        'program_studi_ts_1',
        'program_studi_ts',
        'rata_rata_2',
    ];
}
