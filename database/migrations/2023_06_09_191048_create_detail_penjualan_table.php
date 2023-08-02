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
        Schema::create('detail_penjualan', function (Blueprint $table) {
           
           
           $table->increments('id', true);
        $table->integer('pelanggan_id')->unsigned();
        $table->integer('kategori_id')->unsigned();
        $table->integer('kuantitas');
        $table->double('total', 8, 2);
        $table->string('kode');
        $table->timestamps();
           
           
        });
        
        Schema::table('detail_penjualan', function($table) {
       $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
       $table->foreign('kategori_id')->references('id')->on('kategori');
   });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualan');
    }
};
