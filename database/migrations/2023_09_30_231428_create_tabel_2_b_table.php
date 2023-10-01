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
        Schema::create('tabel_2_b', function (Blueprint $table) {
            $table->id();
            $table->string('program_studi');
            $table->integer('jumlah_mahasiswa_aktif_ts_2');
            $table->integer('jumlah_mahasiswa_aktif_ts_1');
            $table->integer('jumlah_mahasiswa_aktif_ts');
            $table->integer('jumlah_mahasiswa_asing_penuh_waktu_ts_2');
            $table->integer('jumlah_mahasiswa_asing_penuh_waktu_ts_1');
            $table->integer('jumlah_mahasiswa_asing_penuh_waktu_ts');
            $table->integer('jumlah_mahasiswa_asing_paruh_waktu_ts_2');
            $table->integer('jumlah_mahasiswa_asing_paruh_waktu_ts_1');
            $table->integer('jumlah_mahasiswa_asing_paruh_waktu_ts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_2_b');
    }
};
