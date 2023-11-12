@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
 
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Visualizar') }} Profesor</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('profesors.index') }}"> {{ __('Volver Atras') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $profesor->nombre }}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Telefono:</strong>
                        {{ $profesor->telefono }}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $profesor->email }}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Materias:</strong>
                        {{ $profesor->materias }}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Estudiantes Id:</strong>
                        {{ $profesor->estudiante->paterno }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop