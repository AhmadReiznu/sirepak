<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_2_A extends Model
{
    use HasFactory;

    protected $table = 'tabel_2_a';

    protected $fillable = [
        'tahun_akademik',
        'daya_tampung',
        'jumlah_calon_mahasiswa_pendaftar',
        'jumlah_calon_mahasiswa_lulus_seleksi',
        'jumlah_mahasiswa_baru_reguler',
        'jumlah_mahasiswa_baru_transfer',
        'jumlah_mahasiswa_aktif_reguler',
        'jumlah_mahasiswa_aktif_transfer',
    ];
}
