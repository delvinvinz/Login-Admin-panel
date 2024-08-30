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
        Schema::create('kategori_kues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_products')->constrained('products');
            $table->string('kue_kering', 255)->nullable();
            $table->string('kue_basah', 255)->nullable();
            $table->string('snack', 255)->nullable();
            $table->string('manisan', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_kues');
    }
};
