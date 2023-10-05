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
        Schema::create('tabel_8_d_1_b', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_lulus');
            $table->integer('jumlah_lulusan');
            $table->integer('jumlah_lulusan_yang_terlacak');
            $table->integer('jltwtmp_wt_6_bulan');
            $table->integer('jltwtmp_6_wt_18_bulan');
            $table->integer('jltwtmp_wt_18_bulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_d_1_b');
    }
};
