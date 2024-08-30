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
        Schema::create('pengambilan_kues', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengambilan');
            $table->string('nama_peserta', 100);
            $table->string('jenis_kue', 100);
            $table->integer('jumlah_pengambilan');
            $table->string('status_pengambilan', 50);
            $table->time('waktu_pengambilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengambilan_kues');
    }
};
