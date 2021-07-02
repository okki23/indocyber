<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keranjang extends Migration
{
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_produk');
            $table->integer('qty');
            $table->enum('status_checkout', ['ya', 'tidak']);
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('keranjang');
    }
}
