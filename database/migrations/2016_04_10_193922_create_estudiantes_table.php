<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('carrera');
            $table->string('celular');
            $table->string('col_proc');
            $table->string('vive_con');
            $table->string('rel_padres');
            $table->string('rel_hermanos');
            $table->string('tiene_amigos');
            $table->string('conoce_amigos');
            $table->string('sale_fiestas');
            $table->string('actividades');
            $table->string('consume');
            $table->string('primaria');
            $table->string('secundaria');
            $table->string('razon_carrera');
            $table->string('organiza_tiempo');
            $table->string('motivo_rendimiento');
            $table->string('pareja');
            $table->string('dificultad_docentes');
            $table->string('actividades_uc');
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
        Schema::drop('estudiantes');
    }
}
