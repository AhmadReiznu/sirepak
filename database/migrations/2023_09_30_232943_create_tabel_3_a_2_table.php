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
        Schema::create('tabel_3_a_2', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts');
            $table->float('rata_rata_1');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1');
            $table->integer('jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts');
            $table->float('rata_rata_2');
            $table->float('rata_rata_jumlah_bimbingan_di_semua_program_semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_3_a_2');
    }
};
