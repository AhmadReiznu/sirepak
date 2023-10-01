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
        Schema::create('tabel_3_a_3', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->tinyInteger('dtps');
            $table->integer('ewmp_pendidikan_ps_yang_diakreditasi');
            $table->integer('ewmp_pendidikan_ps_lain_di_dalam_pt');
            $table->integer('ewmp_penelitian');
            $table->integer('ewmp_pkm');
            $table->integer('ewmp_tugas_tambahan');
            $table->integer('jumlah');
            $table->float('rata_rata_per_semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_3_a_3');
    }
};
