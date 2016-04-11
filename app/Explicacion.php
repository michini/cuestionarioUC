<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explicacion extends Model
{
    protected $table = 'explicaciones';
    protected $fillable = [
        'exp_rel_padres',
        'exp_rel_hermanos',
        'exp_rel_amigos',
        'exp_fiesta',
        'exp_primaria',
        'exp_secundaria',
        'exp_razon_carrera',
        'exp_organiza_tiempo',
        'exp_dificultad_aprender',
        'exp_pareja',
        'exp_dificultad_docentes',
        'exp_actividades_uc',
        'student_id'
    ];

    public function estudiante(){
        return $this->hasOne(Estudiante::class);
    }
}
