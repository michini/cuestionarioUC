@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    <h1 class="page-header text-center">Sistema de entrevistas de diagnóstico - PLAN 3+</h1>
                    <a href="{{url('/estudiante')}}" class="btn btn-success center-block">Ir al cuestionario</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
