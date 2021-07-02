<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('image');
            $table->integer('harga');
            $table->integer('stok');
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
