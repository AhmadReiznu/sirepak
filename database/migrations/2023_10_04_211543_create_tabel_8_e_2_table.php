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
        Schema::create('tabel_8_e_2', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kemampuan');
            $table->float('tkp_sangat_baik');
            $table->float('tkp_baik');
            $table->float('tkp_cukup');
            $table->float('tkp_kurang');
            $table->string('rencana_tindak_lanjut_oleh_ps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_e_2');
    }
};
