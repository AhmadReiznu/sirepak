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
        Schema::create('tabel_8_c_2', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_masuk');
            $table->integer('jumlah_mahasiswa_diterima');
            $table->integer('jml_akhir_ts_6');
            $table->integer('jml_akhir_ts_5');
            $table->integer('jml_akhir_ts_4');
            $table->integer('jml_akhir_ts_3');
            $table->integer('jml_akhir_ts_2');
            $table->integer('jml_akhir_ts_1');
            $table->integer('jml_akhir_ts');
            $table->integer('jumlah_lulusan__akhir_ts');
            $table->string('rata_rata_masa_studi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_8_c_2');
    }
};
