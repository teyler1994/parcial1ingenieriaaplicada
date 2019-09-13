<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_actividad', 150);
            $table->json('archivo');
            $table->string('categoria', 250);
            $table->integer('tiempo');
            $table->integer('orden');
            $table->integer('estado');
            $table->bigInteger('clase_id')->unsigned();
            $table->foreign('clase_id')->references('id')
            ->on('clases');
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
        Schema::dropIfExists('actividades');
    }
}
