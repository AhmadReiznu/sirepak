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
        Schema::create('tabel_3_a_1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('nidn');
            $table->string('pendidikan_pasca_sarjana_magister')->nullable();
            $table->string('pendidikan_pasca_sarjana_doktor')->nullable();
            $table->string('bidang_keahlian')->nullable();
            $table->tinyInteger('kesesuaian_dengan_kompetensi_inti_ps')->nullable();
            $table->string('jabatan_akademik')->nullable();
            $table->string('sertifikat_pendidik_profesional')->nullable();
            $table->string('sertifikat_kompetensi_profesi_industri')->nullable();
            $table->string('mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi')->nullable();
            $table->tinyInteger('kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu')->nullable();
            $table->string('mata_kuliah_yang_diampu_pada_ps_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_3_a_1');
    }
};
