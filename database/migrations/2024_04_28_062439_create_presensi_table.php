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
        Schema::create('presensi', function (Blueprint $table) {
            $table->string('id_presensi')->primary();

            $table->string('id_pertemuan');
            $table->foreign('id_pertemuan')->references('id_pertemuan')->on('pertemuan');

            $table->string('id_users');
            $table->foreign('id_users')->references('id_users')->on('siswa');

            $table->string('id_kelas');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');

            $table->enum('difficulty', ['Hadir', 'Absen', 'Sakit', 'Izin']);
            $table->text('keterangan');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
