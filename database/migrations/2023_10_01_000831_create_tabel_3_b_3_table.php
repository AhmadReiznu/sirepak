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
        Schema::create('tabel_3_b_3', function (Blueprint $table) {
            $table->id();
            $table->string('sumber_pembiayaan');
            $table->integer('jumlah_judul_pkm_ts_2');
            $table->integer('jumlah_judul_pkm_ts_1');
            $table->integer('jumlah_judul_pkm_ts');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_3_b_3');
    }
};