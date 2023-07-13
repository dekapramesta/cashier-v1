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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->unsignedBigInteger('fk_toko');
            $table->string('nama', 45);
            $table->string('status_pesanan', 10);
            $table->string('total', 20);
            $table->string('bayar', 20);
            $table->dateTime('tgl_pesan');
            $table->timestamps();
        });

        Schema::table('pesanan', function (Blueprint $table) {
            $table->foreign('fk_toko', 'fk_toko_pesanan_fk_01')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
