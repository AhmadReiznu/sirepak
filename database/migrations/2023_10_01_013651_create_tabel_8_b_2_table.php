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
        Schema::create('tabel_8_b_2', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('waktu_perolehan');
            $table->enum('tingkat', ['internasional', 'nasional', 'lokal']);
            $table->string('prestasi_yang_dicapai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_b_2');
    }
};
