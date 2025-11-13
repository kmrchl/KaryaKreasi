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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->string('produk');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 12, 2)->default(0);
            $table->string('gambar')->nullable(); // path atau URL
            $table->timestamps();

            $table->foreign('id_kategori')
              ->references('id_kategori')
              ->on('kategori')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
