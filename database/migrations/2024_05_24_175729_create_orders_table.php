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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_pemesanan')->unique();
            $table->string('nama');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('total');
            $table->date('tanggal');
            $table->integer('estimasi');
            $table->unsignedBigInteger('bahan_id');
            $table->foreign('bahan_id')->references('id')->on('bahans')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('laminasi_id')->nullable();
            $table->foreign('laminasi_id')->references('id')->on('laminasis')->onDelete('cascade');

            $table->unsignedBigInteger('cutting_id')->nullable();
            $table->foreign('cutting_id')->references('id')->on('cuttings')->onDelete('cascade');


        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
