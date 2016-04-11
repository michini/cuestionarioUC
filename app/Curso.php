<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = [
        'curso1',
        'curso1_causa_vez1',
        'exp_curso1_vez1',
        'curso1_causa_vez2',
        'exp_curso1_vez2',
        'curso1_causa_vez3',
        'exp_curso1_vez3',
        'curso2',
        'curso2_causa_vez1',
        'exp_curso2_vez1',
        'curso2_causa_vez2',
        'exp_curso2_vez2',
        'curso2_causa_vez3',
        'exp_curso2_vez3',
        'curso3',
        'curso3_causa_vez1',
        'exp_curso3_vez1',
        'curso3_causa_vez2',
        'exp_curso3_vez2',
        'curso3_causa_vez3',
        'exp_curso3_vez3',
        'curso4',
        'curso4_causa_vez1',
        'exp_curso4_vez1',
        'curso4_causa_vez2',
        'exp_curso4_vez2',
        'curso4_causa_vez3',
        'exp_curso4_vez3',
        'curso5',
        'curso5_causa_vez1',
        'exp_curso5_vez1',
        'curso5_causa_vez2',
        'exp_curso5_vez2',
        'curso5_causa_vez3',
        'exp_curso5_vez3',
        'curso6',
        'curso6_causa_vez1',
        'exp_curso6_vez1',
        'curso6_causa_vez2',
        'exp_curso6_vez2',
        'curso6_causa_vez3',
        'exp_curso6_vez3',
        'student_id'
    ];

    public function estudiante(){
        return $this->hasOne(Estudiante::class);
    }
}
