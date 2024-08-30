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
        Schema::create('riwayat_cicilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users'); // FK
            $table->foreignId('id_transaksis')->constrained('transaksis');
            $table->string('nama_pesanan', 225);
            $table->string('nama_user', 225);
            $table->date('tanggal_pemesanan');
            $table->integer('jumlah_pesanan');
            $table->decimal('jumlah_pembayaran', 10, 2); // numeric
            $table->decimal('sisa_pembayaran', 10, 2); // numeric
            $table->integer('jumlah_cicilan');
            $table->date('tanggal_jatuh_tempo');
            $table->string('status_pembayaran', 50);
            $table->string('alamat', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_cicilans');
    }
};
