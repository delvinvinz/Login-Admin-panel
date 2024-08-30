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
        Schema::create('pesanan_cicilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_products')->constrained('products');
            $table->foreignId('id_kelompoks')->constrained('kelompoks');
            $table->foreignId('id_keranjangs')->constrained('keranjangs');
            $table->string('nama_user', 225);
            $table->integer('jumlah_pesanan');
            $table->decimal('total_harga', 10, 2);
            $table->date('tanggal_pesanan');
            $table->string('alamat', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_cicilans');
    }
};
