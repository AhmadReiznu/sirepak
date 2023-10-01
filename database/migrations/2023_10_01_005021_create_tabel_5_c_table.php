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
        Schema::create('tabel_5_c', function (Blueprint $table) {
            $table->id();
            $table->string('aspek_yang_diukur');
            $table->float('tkm_sangat_baik');
            $table->float('tkm_baik');
            $table->float('tkm_cukup');
            $table->float('tkm_kurang');
            $table->mediumText('rencana_tindak_lanjut_oleh_ps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_5_c');
    }
};
