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
        Schema::create('laporan_profit_kues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_products')->constrained('products');
            $table->string('jenis_kue', 225);
            $table->integer('jumlah_terjual');
            $table->decimal('harga_satuan_kue', 10, 2);
            $table->decimal('total_pendapatan', 10, 2);
            $table->decimal('biaya_bahan_baku', 10, 2);
            $table->decimal('biaya_tenaga_kerja', 10, 2);
            $table->decimal('biaya_tambahan', 10, 2);
            $table->decimal('total_biaya', 10, 2);
            $table->decimal('pendapatan_keseluruhan', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_profit_kues');
    }
};
