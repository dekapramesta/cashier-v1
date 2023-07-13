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
        Schema::create('mst_toko_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('fk_user')->unique();
            $table->unsignedBigInteger('fk_toko');
        });

        Schema::table('mst_toko_users', function (Blueprint $table) {
            $table->foreign('fk_toko', 'fk_toko_tu_fk_01')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_user', 'fk_user_tu_fk_01')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('mst_toko_users');
    }
};
