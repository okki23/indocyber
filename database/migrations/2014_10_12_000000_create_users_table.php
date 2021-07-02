<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id(); 
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('password');
            $table->text('no_hp');
            $table->text('alamat');
            $table->enum('akses', [0,1]);
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
