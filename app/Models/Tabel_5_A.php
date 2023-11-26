<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel_5_A extends Model
{
    use HasFactory;

    protected $table = 'tabel_5_a';

    protected $fillable = [
        'semester',
        'kode_mata_kuliah',
        'nama_mata_kuliah',
        'mata_kuliah_kompetensi',
        'sks_kuliah',
        'sks_seminar',
        'sks_praktikum',
        'konversi_kredit_ke_jam',
        'capaian_pembelajaran_sikap',
        'capaian_pembelajaran_pengetahuan',
        'capaian_pembelajaran_keterampilan_umum',
        'capaian_pembelajaran_keterampilan_khusus',
        'dokumen_rencana_pembelajaran',
        'unit_penyelenggara',
    ];
}
