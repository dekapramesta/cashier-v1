<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk', 45);
            $table->unsignedBigInteger('fk_toko');
            $table->unsignedBigInteger('fk_kategori');
            $table->string('gambar_produk')->nullable();
            $table->string('harga', 20);
            $table->tinyInteger('status_produk');
            $table->timestamps();
        });

        Schema::table('produk', function (Blueprint $table) {
            $table->foreign('fk_toko', 'fk_toko_produk_fk_01')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_kategori', 'fk_kategori_produk_fk_02')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
