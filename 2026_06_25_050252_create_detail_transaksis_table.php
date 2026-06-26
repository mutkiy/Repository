<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            // Relasi ke tabel transaksis
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade');
            // Relasi ke tabel produks (menu)
            $table->foreignId('produk_id')->constrained('produks')->onDelete('cascade');
            $table->integer('jumlah'); // Jumlah porsi yang dibeli
            $table->integer('subtotal'); // Harga produk x jumlah
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};