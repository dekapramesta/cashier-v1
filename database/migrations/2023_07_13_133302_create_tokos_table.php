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
        Schema::create('toko', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko', 45);
            $table->longText('lokasi_toko')->nullable();
            $table->longText('about_toko')->nullable();
            $table->string('gambar_toko')->nullable();
            $table->dateTime('date_end')->nullable();
            $table->string('qrcode')->nullable();
            $table->timestamps();
        });

        Schema::table('toko', function (Blueprint $table) {
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
    }
};
