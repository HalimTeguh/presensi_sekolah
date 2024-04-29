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
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->string('id_pertemuan')->primary();

            $table->string('id_mapel');
            $table->foreign('id_mapel')->references('id_mapel')->on('mapel');

            $table->string('id_users')->nullable();
            $table->foreign('id_users')->references('id_users')->on('guru');

            $table->string('name');
            $table->dateTime('tgl_pertemuan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan');
    }
};
