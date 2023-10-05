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
        Schema::create('tabel_8_e_1', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_lulus');
            $table->integer('jumlah_lulusan');
            $table->integer('jumlah_lulusan_yang_terlacak');
            $table->integer('jltbbt_lokal');
            $table->integer('jltbbt_nasional');
            $table->integer('jltbbt_multinasional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_e_1');
    }
};
