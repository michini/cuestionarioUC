<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Estudiante;
use App\Explicacion;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class QuizController extends Controller
{
    public function quiz(){
        return view('quiz.quiz');
    }

    public function postdata(Request $request){
        $codigo = $request->get('codigo');
        $estudiante = Estudiante::find($codigo);

        /*Actividades*/
        $actividades = implode(',',Input::get('actividades'));

        /*Consume*/
        $consume = implode(':',array_flatten(Input::get('consume')));

        $estudiante->celular = Input::get('celular');
        $estudiante->col_proc = Input::get('col_proc');
        $estudiante->vive_con = Input::get('vive');
        $estudiante->rel_padres = Input::get('rel_padres');
        $estudiante->rel_hermanos = Input::get('rel_hermanos');
        $estudiante->tiene_amigos = Input::get('tiene_amigos');
        $estudiante->conoce_amigos = Input::get('conoce_amigos');
        $estudiante->sale_fiestas = Input::get('sale_fiestas');

        $estudiante->actividades = $actividades;
        $estudiante->consume = $consume;

        $estudiante->primaria = Input::get('primaria');
        $estudiante->secundaria = Input::get('secundaria');
        $estudiante->razon_carrera = Input::get('razon_carrera');
        $estudiante->organiza_tiempo = Input::get('organiza_tiempo');
        $estudiante->motivo_rendimiento = Input::get('motivo_rendimiento');
        $estudiante->pareja = Input::get('pareja');
        $estudiante->dificultad_docentes = Input::get('dificultad_docentes');
        $estudiante->actividades_uc = Input::get('actividad_uc');
        $estudiante->save();

        Explicacion::create([
            'exp_rel_padres' => Input::get('exp_rel_padres'),
            'exp_rel_hermanos' => Input::get('exp_rel_hermanos'),
            'exp_rel_amigos' => Input::get('exp_rel_amigos'),
            'exp_fiesta' => Input::get('exp_fiesta'),
            'exp_primaria' => Input::get('exp_primaria'),
            'exp_secundaria' => Input::get('exp_secundaria'),
            'exp_razon_carrera' => Input::get('exp_razon_carrera'),
            'exp_organiza_tiempo' => Input::get('exp_organiza_tiempo'),
            'exp_dificultad_aprender' => Input::get('exp_dif_aprend'),
            'exp_pareja' => Input::get('exp_pareja'),
            'exp_dificultad_docentes' => Input::get('exp_dif_doc'),
            'exp_actividades_uc' => Input::get('exp_act_uc'),
            'student_id' => $codigo
        ]);

        Curso::create([
            'curso1' => Input::get('curso1'),
            'curso1_causa_vez1' => Input::get('curso1_causa_vez1'),
            'exp_curso1_vez1' => Input::get('exp_curso1_vez1'),
            'curso1_causa_vez2' => Input::get('curso1_causa_vez2'),
            'exp_curso1_vez2' => Input::get('exp_curso1_vez2'),
            'curso1_causa_vez3' => Input::get('curso1_causa_vez3'),
            'exp_curso1_vez3' => Input::get('exp_curso1_vez3'),
            'curso2' => Input::get('curso2'),
            'curso2_causa_vez1' => Input::get('curso2_causa_vez1'),
            'exp_curso2_vez1' => Input::get('exp_curso2_vez1'),
            'curso2_causa_vez2' => Input::get('curso2_causa_vez2'),
            'exp_curso2_vez2' => Input::get('exp_curso2_vez2'),
            'curso2_causa_vez3' => Input::get('curso2_causa_vez3'),
            'exp_curso2_vez3' => Input::get('exp_curso2_vez3'),
            'curso3' => Input::get('curso3'),
            'curso3_causa_vez1' => Input::get('curso3_causa_vez1'),
            'exp_curso3_vez1' => Input::get('exp_curso3_vez1'),
            'curso3_causa_vez2' => Input::get('curso3_causa_vez2'),
            'exp_curso3_vez2' => Input::get('exp_curso3_vez2'),
            'curso3_causa_vez3' => Input::get('curso3_causa_vez3'),
            'exp_curso3_vez3' => Input::get('exp_curso3_vez3'),
            'curso4' => Input::get('curso4'),
            'curso4_causa_vez1' => Input::get('curso4_causa_vez1'),
            'exp_curso4_vez1' => Input::get('exp_curso4_vez1'),
            'curso4_causa_vez2' => Input::get('curso4_causa_vez2'),
            'exp_curso4_vez2' => Input::get('exp_curso4_vez2'),
            'curso4_causa_vez3' => Input::get('curso4_causa_vez3'),
            'exp_curso4_vez3' => Input::get('exp_curso4_vez3'),
            'curso5' => Input::get('curso5'),
            'curso5_causa_vez1' => Input::get('curso5_causa_vez1'),
            'exp_curso5_vez1' => Input::get('exp_curso5_vez1'),
            'curso5_causa_vez2' => Input::get('curso5_causa_vez2'),
            'exp_curso5_vez2' => Input::get('exp_curso5_vez2'),
            'curso5_causa_vez3' => Input::get('curso5_causa_vez3'),
            'exp_curso5_vez3' => Input::get('exp_curso5_vez3'),
            'curso6' => Input::get('curso6'),
            'curso6_causa_vez1' => Input::get('curso6_causa_vez1'),
            'exp_curso6_vez1' => Input::get('exp_curso6_vez1'),
            'curso6_causa_vez2' => Input::get('curso6_causa_vez2'),
            'exp_curso6_vez2' => Input::get('exp_curso6_vez2'),
            'curso6_causa_vez3' => Input::get('curso6_causa_vez3'),
            'exp_curso6_vez3' => Input::get('exp_curso6_vez3'),
            'student_id' => $codigo
        ]);

        return redirect()->to('/estudiante');

    }

    public function exportExcel(){
        Excel::create('Reporte estudiantes',function($excel){
            $excel->sheet('Lista',function($sheet){
                $estudiantes = Estudiante::all();
                $sheet->fromArray($estudiantes);
            });
            $excel->sheet('Explicaiones',function($sheet){
                $explicaciones = Explicacion::all();
                $sheet->fromArray($explicaciones);
            });
            $excel->sheet('Cursos',function($sheet){
                $cursos = Curso::all();
                $sheet->fromArray($cursos);
            });
        })->export('xls');
    }
}
