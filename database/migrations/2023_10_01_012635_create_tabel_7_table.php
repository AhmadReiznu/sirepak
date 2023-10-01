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
        Schema::create('tabel_7', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('tema_pkm_sesuai_roadmap');
            $table->string('nama_mahasiswa');
            $table->string('judul_kegiatan');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_7');
    }
};
