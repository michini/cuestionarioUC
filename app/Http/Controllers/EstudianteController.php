<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function searchCod(){
        return view('estudiante.student');
    }

    public function findCod(Request $request){
        $estudiante = Estudiante::where('id',$request->get('codigo'))->first();
        $error = "Estudiante no existe";
        if(!$estudiante){
            return redirect()->back()->withErrors($error);
        }elseif($estudiante->col_proc){
            return redirect()->back()->withErrors('Estudiante ya entrevistado');
        }
        return view('quiz.quiz',compact('estudiante'));
    }
}
