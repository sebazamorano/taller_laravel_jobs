<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->longText('beneficios');
            $table->longText('ambiente_trabajo')->nullable();
            $table->integer('sueldo', 0, 1)->nullable();
            $table->string('email')->nullable();
            $table->string('ciudad');
            $table->string('pais');
            $table->integer('user_id');
            $table->integer('level_id');
            $table->integer('tipo_id');
            $table->softDeletes();
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
        Schema::dropIfExists('trabajos');
    }
}
