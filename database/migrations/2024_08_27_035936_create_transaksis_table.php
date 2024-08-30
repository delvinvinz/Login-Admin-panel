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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_laporan_rekap_transaksis')->constrained('laporan_rekap_transaksis');
            $table->foreignId('id_laporan_profit_kues')->constrained('laporan_profit_kues');
            $table->integer('jumlah_transaksi');
            $table->date('tanggal_transaksi');
            $table->string('metode_pembayaran', 225);
            $table->string('status_transaksi', 50);
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
