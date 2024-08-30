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
        Schema::create('laporan_rekap_transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('periode_laporan');
            $table->integer('jumlah_transaksi');
            $table->integer('total_keseluruhan_transaksi');
            $table->string('jenis_transaksi', 225);
            $table->string('metode_pembayaran', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_rekap_transaksis');
    }
};
