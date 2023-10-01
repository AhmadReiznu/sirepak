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
        Schema::create('tabel_5_b', function (Blueprint $table) {
            $table->id();
            $table->string('judul_penelitian_pkm');
            $table->string('nama_dosen');
            $table->string('mata_kuliah');
            $table->string('bentuk_integrasi');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_5_b');
    }
};
