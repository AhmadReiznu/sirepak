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
            $table->string('pendidikan_pasca_sarjana_magister');
            $table->string('pendidikan_pasca_sarjana_doktor');
            $table->string('bidang_keahlian');
            $table->tinyInteger('kesesuaian_dengan_kompetensi_inti_ps');
            $table->string('jabatan_akademik');
            $table->string('sertifikat_pendidik_profesional');
            $table->string('sertifikat_kompetensi_profesi_industri');
            $table->string('mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi');
            $table->tinyInteger('kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu');
            $table->string('mata_kuliah_yang_diampu_pada_ps_lain');
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
