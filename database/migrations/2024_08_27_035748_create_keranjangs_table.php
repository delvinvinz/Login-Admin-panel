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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_products')->constrained('products');
            $table->string('gambar', 225);
            $table->string('alamat', 225);
            $table->string('nama_kue', 225);
            $table->integer('jumlah');
            $table->string('metode_pembayaran', 50);
            $table->date('tanggal_pengambilan');
            $table->decimal('harga_kue', 10, 2);
            $table->string('metode_pengambilan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
