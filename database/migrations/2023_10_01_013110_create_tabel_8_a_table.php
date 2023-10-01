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
        Schema::create('tabel_8_a', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_lulus');
            $table->integer('jumlah_lulusan');
            $table->float('ipk_min');
            $table->float('ipk_rata_rata');
            $table->float('ipk_maks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_a');
    }
};
