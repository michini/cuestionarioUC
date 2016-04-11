<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso1');
            $table->string('curso1_causa_vez1');
            $table->string('exp_curso1_vez1');
            $table->string('curso1_causa_vez2');
            $table->string('exp_curso1_vez2');
            $table->string('curso1_causa_vez3');
            $table->string('exp_curso1_vez3');

            $table->string('curso2');
            $table->string('curso2_causa_vez1');
            $table->string('exp_curso2_vez1');
            $table->string('curso2_causa_vez2');
            $table->string('exp_curso2_vez2');
            $table->string('curso2_causa_vez3');
            $table->string('exp_curso2_vez3');

            $table->string('curso3');
            $table->string('curso3_causa_vez1');
            $table->string('exp_curso3_vez1');
            $table->string('curso3_causa_vez2');
            $table->string('exp_curso3_vez2');
            $table->string('curso3_causa_vez3');
            $table->string('exp_curso3_vez3');

            $table->string('curso4');
            $table->string('curso4_causa_vez1');
            $table->string('exp_curso4_vez1');
            $table->string('curso4_causa_vez2');
            $table->string('exp_curso4_vez2');
            $table->string('curso4_causa_vez3');
            $table->string('exp_curso4_vez3');

            $table->string('curso5');
            $table->string('curso5_causa_vez1');
            $table->string('exp_curso5_vez1');
            $table->string('curso5_causa_vez2');
            $table->string('exp_curso5_vez2');
            $table->string('curso5_causa_vez3');
            $table->string('exp_curso5_vez3');

            $table->string('curso6');
            $table->string('curso6_causa_vez1');
            $table->string('exp_curso6_vez1');
            $table->string('curso6_causa_vez2');
            $table->string('exp_curso6_vez2');
            $table->string('curso6_causa_vez3');
            $table->string('exp_curso6_vez3');
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
        Schema::drop('cursos');
    }
}
