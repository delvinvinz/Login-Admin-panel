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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_products')->constrained('products');
            // $table->foreignId('id_riwayat_pembayarans')->constrained('riwayat_pembayarans');
            $table->integer('rating')->default(0);
            $table->text('review_teks')->nullable();
            $table->datetime('review_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
