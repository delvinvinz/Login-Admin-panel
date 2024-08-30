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
        Schema::create('buktis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksis')->constrained('transaksis');
            $table->foreignId('id_pengambilan_kues')->constrained('pengambilan_kues');
            $table->foreignId('id_trackings')->constrained('trackings');
            $table->string('url_gambar', 225);
            $table->datetime('tanggal_unggah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buktis');
    }
};
