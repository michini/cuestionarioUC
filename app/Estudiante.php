<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['id','nombres','carrera','celular'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function explicacion(){
        return $this->belongsTo(Explicacion::class);
    }
}
