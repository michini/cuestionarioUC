@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! Form::open(['route'=>['postdata','codigo'=>$estudiante->id],'method'=>'POST','class'=>'form-horizontal','id'=>'installationForm']) !!}
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Preguntas</div>
                        <div class="panel-body">
                            @include('quiz.partial.lista')
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Responder preguntas</div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <!-- home tab -->
                                <div class="tab-pane active" id="home">
                                    <h2 class="text-center">Datos del estudiante</h2>
                                    <div class="form-group">
                                        {!! Form::label('nombre','Nombres:',['class'=>'col-xs-3 control-label']) !!}
                                        <div class="col-xs-5">
                                            {!! Form::text('nombre',$estudiante->nombres,['class'=>'form-control','disabled']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('eap','EAP:',['class'=>'col-xs-3 control-label']) !!}
                                        <div class="col-xs-5">
                                            {!! Form::text('eap',$estudiante->carrera,['class'=>'form-control','disabled']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('codigo','Codigo:',['class'=>'col-xs-3 control-label']) !!}
                                        <div class="col-xs-5">
                                            {!! Form::text('codigo',$estudiante->id,['class'=>'form-control','disabled']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('celular','Celular:',['class'=>'col-xs-3 control-label']) !!}
                                        <div class="col-xs-5">
                                            {!! Form::text('celular',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('celular','Procedencia',['class'=>'col-xs-3 control-label']) !!}
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('col_proc','particular',false) !!}
                                                    Particular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('col_proc','estatal',false) !!}
                                                    Estatal
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('col_proc','no_escolarizado',false) !!}
                                                    No escolarizado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 1 tab -->
                                <div class="tab-pane" id="quiz1">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Con quién(es) vives?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','padres_hermanos',false) !!}
                                                    Padres y hermanos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','abuelos',false) !!}
                                                    Abuelos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','tios',false) !!}
                                                    Tios
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','solo_padre_madre',false) !!}
                                                    Solo padre o madre
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','solo',false) !!}
                                                    Solo
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('vive','otros',false) !!}
                                                    Otros
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 tab -->
                                <div class="tab-pane" id="quiz2">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cómo calificas la relación con tus padres?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_padres','muy_buena',false) !!}
                                                    Muy buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_padres','buena',false) !!}
                                                    Buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_padres','regular',false) !!}
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_padres','mala',false) !!}
                                                    Mala
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_padres','muy_mala',false) !!}
                                                    Muy mala
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explique:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_rel_padres',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                </div>

                                <!-- 3 tab -->
                                <div class="tab-pane" id="quiz3">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cómo calificas la relación con tus hermanos?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_hermanos','muy_buena',false) !!}
                                                    Muy buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_hermanos','buena',false) !!}
                                                    Buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_hermanos','regular',false) !!}
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_hermanos','mala',false) !!}
                                                    Mala
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('rel_hermanos','muy_mala',false) !!}
                                                    Muy mala
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explique:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_rel_hermanos',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 tab -->
                                <div class="tab-pane" id="quiz4">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Tienes amigos?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('tiene_amigos','muchos',false) !!}
                                                    Muchos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('tiene_amigos','regular',false) !!}
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('tiene_amigos','pocos',false) !!}
                                                    Pocos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('tiene_amigos','no_tiene',false) !!}
                                                    No tiene
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿A la mayoria de tus amigos los conoces directamente?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('conoce_amigos','si',false) !!}
                                                    Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('conoce_amigos','no',false) !!}
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cómo es la relación con tus amigos?</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_rel_amigos',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                </div>

                                <!-- 5 tab -->
                                <div class="tab-pane" id="quiz5">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Con qué frecuencia sales a fiestas o reuniones?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('sale_fiestas','interdiario',false) !!}
                                                    Interdiario
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('sale_fiestas','semanalmente',false) !!}
                                                    Semalanmente
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('sale_fiestas','una_mes',false) !!}
                                                    Una vez al mes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('sale_fiestas','no_sale',false) !!}
                                                    No suelo hacerlo
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Porqué?</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_fiesta',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 tab -->
                                <div class="tab-pane" id="quiz6">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿En tu tiempo libre, que tipo de actividades prácticas más?</label>
                                        <div class="col-xs-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="deporte"> Deporte
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="fiesta"> Fiesta
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="paseo"> Salir de paseo
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="actividad_religiosa"> Actividad religiosa
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="tv"> Tv
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="redes_sociales"> Redes sociales
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="juegos_internet"> Juegos en internet
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="lectura"> Lectura
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="nada"> Nada
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="actividades[]" value="otras"> Otras
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7 tab -->
                                <div class="tab-pane" id="quiz7">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Consumes:</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::checkbox('consume[]','bebida_energizante',false) !!}
                                                    Bebidas Energizantes
                                                </label>
                                                <label class="radio-inline"><input type="radio" name="consume[][0]" value="frecuentemente">Frecuentemente</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][0]" value="a_veces">A veces</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][0]" value="nunca">Nunca</label>
                                            </div>
                                            <br>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::checkbox('consume[]','bebida_alcoholica',false) !!}
                                                    Bebidas Alcoholicas
                                                </label>
                                                <label class="radio-inline"><input type="radio" name="consume[][1]" value="frecuentemente">Frecuentemente</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][1]" value="a_veces">A veces</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][1]" value="nunca">Nunca</label>
                                            </div>
                                            <br>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::checkbox('consume[]','cigarrillo',false) !!}
                                                    Cigarrillos
                                                </label><br>
                                                <label class="radio-inline"><input type="radio" name="consume[][2]" value="frecuentemente">Frecuentemente</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][2]" value="a_veces">A veces</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][2]" value="nunca">Nunca</label>
                                            </div>
                                            <br>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::checkbox('consume[]','droga',false) !!}
                                                    Drogas
                                                </label><br>
                                                <label class="radio-inline"><input type="radio" name="consume[][3]" value="frecuentemente">Frecuentemente</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][3]" value="a_veces">A veces</label>
                                                <label class="radio-inline"><input type="radio" name="consume[][3]" value="nunca">Nunca</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 8 tab -->
                                <div class="tab-pane" id="quiz8">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cómo fue tu desenvolvimiento académico durante la primaria? </label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('primaria','muy_buena',false) !!}
                                                    Muy buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('primaria','buena',false) !!}
                                                    Buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('primaria','regular',false) !!}
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('primaria','mala',false) !!}
                                                    Mala
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('primaria','muy_mala',false) !!}
                                                    Muy mala
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explica:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_primaria',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 9 tab -->
                                <div class="tab-pane" id="quiz9">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cómo fue tu desenvolvimiento académico durante la secundaria? </label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('secundaria','muy_buena',false) !!}
                                                    Muy buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('secundaria','buena',false) !!}
                                                    Buena
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('secundaria','regular',false) !!}
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('secundaria','mala',false) !!}
                                                    Mala
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('secundaria','muy_mala',false) !!}
                                                    Muy mala
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explica:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_secundaria',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 10 tab -->
                                <div class="tab-pane" id="quiz10">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Por qué razón elegiste la carrera?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','vocacion',false) !!}
                                                    Por vocación
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','ingreso_economico',false) !!}
                                                    Por los ingresos economicos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','facilidad_trabajo',false) !!}
                                                    Por la facilidad de encontrar trabajo
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','influencia_familiar',false) !!}
                                                    Por influencia familiar
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','satisfacer_padres',false) !!}
                                                    Para satisfacer a mis padres
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','manera_casual',false) !!}
                                                    De manera casual
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','seguir_amigos',false) !!}
                                                    Por seguir a los amigos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','tradicion_familiar',false) !!}
                                                    Por tradicion familiar
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','sin_otra_opcion',false) !!}
                                                    No habia otra opcion
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','no_tengo_idea',false) !!}
                                                    No tengo idea
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('razon_carrera','otros',false) !!}
                                                    Otros
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explica:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_razon_carrera',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 11 tab -->
                                <div class="tab-pane" id="quiz11">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Organizas tu tiempo para estudiar?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('organiza_tiempo','si',false) !!}
                                                    Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('organiza_tiempo','no',false) !!}
                                                    No
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('organiza_tiempo','a_veces',false) !!}
                                                    A veces
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label"></label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_organiza_tiempo',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 12 tab -->
                                <div class="tab-pane" id="quiz12">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Cuál consideras que es el principal motivo que afecta tu rendimiento académico?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','familiares',false) !!}
                                                    Familiares
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','economicos',false) !!}
                                                    Económicos
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','emocionales',false) !!}
                                                    Emocionales
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','laborales',false) !!}
                                                    Laborales
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','sociales',false) !!}
                                                    Sociales
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','dificultad_aprendizaje',false) !!}
                                                    Dificultades de aprendizaje
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('motivo_rendimiento','otros',false) !!}
                                                    Otros
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label"></label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_dif_aprend',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 13 tab -->
                                <div class="tab-pane" id="quiz13">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Actualmente te encuentras</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('pareja','con_pareja',false) !!}
                                                    Con pareja
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('pareja','sin_pareja',false) !!}
                                                    Sin pareja
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('pareja','nunca',false) !!}
                                                    Nunca lo has tenido
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explica:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_pareja',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Señala por que desaprobaste las tres ultimas veces el curso de:</label>
                                        <div class="col-xs-9">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Primer curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso1',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso1_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso1_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso1_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso1_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Segundo curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso2',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso2_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso2_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso2_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso2_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Tercer curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso3',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso3_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso3_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso3_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso3_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                Cuarto curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso4',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso4_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso4_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso4_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso4_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFive">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                Qunto curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso5',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso5_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso5_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso5_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso5_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingSix">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                Sexto curso
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="form-group">
                                                                        {!! Form::label('curso','Curso:',['class'=>'control-label col-xs-3']) !!}
                                                                        <div class="col-xs-9">
                                                                            {!! Form::text('curso6',null,['class'=>'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><b>Primera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez1','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso6_vez1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Segunda vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez2','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso6_vez2" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-7">
                                                                    <div class="radio">
                                                                        <label><b>Tercera vez:</b></label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','cuesta_entender',false) !!}
                                                                            Te cuesta entender los temas
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','inasistencia',false) !!}
                                                                            Inasistencia
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','no_preparaste_para_examen',false) !!}
                                                                            No te preparaste para el examen
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','no_lugar_de_estudio',false) !!}
                                                                            No tengo lugar de estudio
                                                                        </label>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','metodologia_docente',false) !!}
                                                                            Metodologia del docente
                                                                        </label><br>
                                                                        <label>
                                                                            {!! Form::radio('curso6_causa_vez3','otros',false) !!}
                                                                            Otros
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control" placeholder="Explica" name="exp_curso6_vez3" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 14 tab -->
                                <div class="tab-pane" id="quiz14">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Tuviste dificultades/discrepancias con tu docente?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('dificultad_docentes','si',false) !!}
                                                    Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('dificultad_docentes','no',false) !!}
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Explica:</label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_dif_doc',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- 15 tab -->
                                <div class="tab-pane" id="quiz15">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">¿Estarías dispuesto a comprometerte a participar a todas las actividades que la Universidad realice para que mejores tu situación académica?</label>
                                        <div class="col-xs-5">
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('actividad_uc','totalmente',false) !!}
                                                    Totalmente
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('actividad_uc','parcialmente',false) !!}
                                                    Parcialmente
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    {!! Form::radio('actividad_uc','no_comprometeria',false) !!}
                                                    No me comprometeria
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label"></label>
                                        <div class="col-xs-5">
                                            {!! Form::textarea('exp_act_uc',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- Previous/Next buttons -->
                                <ul class="pager wizard">
                                    <li class="previous"><a href="javascript: void(0);">Anterior</a></li>
                                    <li class="next"><a href="javascript: void(0);">Siguiente</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @include('quiz.partial.modal')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('js/js.js')}}"></script>
@endsection
