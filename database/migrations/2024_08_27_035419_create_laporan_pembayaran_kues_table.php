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
        Schema::create('laporan_pembayaran_kues', function (Blueprint $table) {
            $table->id();
            // $table->foreign('id_transaksis')->constrained('transaksis');
            $table->date('tanggal_pembayaran');
            $table->string('nama_user', 225);
            $table->integer('jumlah_pesanan');
            $table->decimal('harga_satuan_kue', 10, 2);
            $table->decimal('total_pembayaran', 10, 2);
            $table->string('metode_pembayaran', 225);
            $table->string('status_pembayaran', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pembayaran_kues');
    }
};
