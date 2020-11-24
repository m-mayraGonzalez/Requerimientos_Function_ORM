<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->char('tipo_doc', 4);
            $table->string('numero_doc', 15);
            $table->string('nombres', 55);
            $table->string('apellidos', 55);
            $table->integer('edad');
            $table->char('genero', 1);
            $table->string('telefono', 14);
            $table->string('direccion', 150);
            $table->string('email', 100)->unique();
            $table->char('tipo_usuario', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
