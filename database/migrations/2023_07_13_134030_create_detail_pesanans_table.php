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
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('fk_pesanan');
            $table->unsignedBigInteger('fk_produk');
            $table->string('harga', 20);
            $table->integer('jumlah');
            $table->timestamps();
        });

        Schema::table('detail_pesanan', function (Blueprint $table) {
            $table->foreign('fk_pesanan', 'fk_pesanan_detail_pesanan_fk_01')->references('id')->on('pesanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_produk', 'fk_produk_detail_pesanan_fk_02')->references('id')->on('produk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
