<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_2_a', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik');
            $table->integer('daya_tampung');
            $table->integer('jumlah_calon_mahasiswa_pendaftar');
            $table->integer('jumlah_calon_mahasiswa_lulus_seleksi');
            $table->integer('jumlah_mahasiswa_baru_reguler');
            $table->integer('jumlah_mahasiswa_baru_transfer');
            $table->integer('jumlah_mahasiswa_aktif_reguler');
            $table->integer('jumlah_mahasiswa_aktif_transfer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_2_a');
    }
};
