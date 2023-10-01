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
        Schema::create('tabel_5_a', function (Blueprint $table) {
            $table->id();
            $table->integer('semester');
            $table->integer('kode_mata_kuliah')->nullable();
            $table->tinyInteger('mata_kuliah_kompetensi');
            $table->integer('sks_kuliah');
            $table->integer('sks_seminar');
            $table->integer('sks_praktikum');
            $table->float('konversi_kredit_ke_jam');
            $table->tinyInteger('capaian_pembelajaran_sikap');
            $table->tinyInteger('capaian_pembelajaran_pengetahuan');
            $table->tinyInteger('capaian_pembelajaran_keterampilan_umum');
            $table->tinyInteger('capaian_pembelajaran_keterampilan_khusus');
            $table->string('dokumen_rencana_pembelajaran');
            $table->string('unit_penyelenggara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_5_a');
    }
};
