<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('exp_rel_padres');
            $table->mediumText('exp_rel_hermanos');
            $table->mediumText('exp_rel_amigos');
            $table->mediumText('exp_fiesta');
            $table->mediumText('exp_primaria');
            $table->mediumText('exp_secundaria');
            $table->mediumText('exp_razon_carrera');
            $table->mediumText('exp_organiza_tiempo');
            $table->mediumText('exp_dificultad_aprender');
            $table->mediumText('exp_pareja');
            $table->mediumText('exp_dificultad_docentes');
            $table->mediumText('exp_actividades_uc');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('estudiantes');
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
        Schema::drop('explicaciones');
    }
}
