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
        Schema::create('tabel_4', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_penggunaan');
            $table->decimal('unit_pengelola_program_studi_ts_2', 18);
            $table->decimal('unit_pengelola_program_studi_ts_1', 18);
            $table->decimal('unit_pengelola_program_studi_ts', 18);
            $table->decimal('rata_rata_1', 18);
            $table->decimal('program_studi_ts_2', 18);
            $table->decimal('program_studi_ts_1', 18);
            $table->decimal('program_studi_ts', 18);
            $table->decimal('rata_rata_2', 18);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_4');
    }
};
