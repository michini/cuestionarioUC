@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Código del alumno</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                        </div>
                    @endif
                    {!! Form::open(['route'=>'findCod','method'=>'POST','class'=>'form-horizontal','autocomplete'=>'off']) !!}
                    <div class="form-group">
                        {!! Form::label('codigo','Codigo:',['class'=>'col-xs-4 control-label']) !!}
                        <div class="col-xs-5">
                            {!! Form::text('codigo',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-5">
                            {!! Form::submit('Enviar:',['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection