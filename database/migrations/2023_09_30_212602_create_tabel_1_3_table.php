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
        Schema::create('tabel_1_3', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga_mitra');
            $table->enum('tingkat', ['internasional', 'nasional', 'lokal']);
            $table->string('judul_kegiatan_kerjasama');
            $table->string('manfaat_bagi_ps_yang_diakreditasi');
            $table->string('waktu_dan_durasi');
            $table->string('bukti_kerjasama');
            $table->string('tahun_berakhirnya_kerjasama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_1_3');
    }
};
