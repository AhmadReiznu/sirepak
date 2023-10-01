<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_2_B extends Model
{
    use HasFactory;

    protected $table = 'tabel_2_b';

    protected $fillable = [
        'program_studi',
        'jumlah_mahasiswa_aktif_ts_2',
        'jumlah_mahasiswa_aktif_ts_1',
        'jumlah_mahasiswa_aktif_ts',
        'jumlah_mahasiswa_asing_penuh_waktu_ts_2',
        'jumlah_mahasiswa_asing_penuh_waktu_ts_1',
        'jumlah_mahasiswa_asing_penuh_waktu_ts',
        'jumlah_mahasiswa_asing_paruh_waktu_ts_2',
        'jumlah_mahasiswa_asing_paruh_waktu_ts_1',
        'jumlah_mahasiswa_asing_paruh_waktu_ts',
    ];
}
