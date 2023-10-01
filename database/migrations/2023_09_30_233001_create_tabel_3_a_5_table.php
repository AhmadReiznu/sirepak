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
        Schema::create('tabel_3_a_5', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen_ndustri');
            $table->string('nidk');
            $table->string('perusahaan');
            $table->string('pendidikan_tertinggi');
            $table->string('bidang_keahlian');
            $table->string('sertifikat_profesi');
            $table->string('mata_kuliah_yang_diampu');
            $table->integer('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_3_a_5');
    }
};
