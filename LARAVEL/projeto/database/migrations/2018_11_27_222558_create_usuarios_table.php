<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('usuario_id');
          $table->string('nome');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('senha');
          $table->string('confirmaSenha');
          $table->rememberToken();
          $table->timestamps('data_hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
