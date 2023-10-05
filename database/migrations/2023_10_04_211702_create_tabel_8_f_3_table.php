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
        Schema::create('tabel_8_f_3', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('nama_produk_jasa');
            $table->text('deskripsi_produk_jasa');
            $table->string('bukti');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_f_3');
    }
};
