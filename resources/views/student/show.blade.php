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
                        <span class="card-title">{{ __('Visualizar') }} Estudiante</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('student.index') }}"> {{ __('Volver Atras') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Apellido Paterno:</strong>
                        {{$estudiantes->paterno}}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Apellido Materno:</strong>
                        {{$estudiantes->materno}}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Nombres:</strong>
                        {{$estudiantes->nombres}}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>CI:</strong>
                        {{$estudiantes->ci}}
                    </div>
                    <br>

                    <div class="form-group">
                        <strong>Zona:</strong>
                        {{$estudiantes->zona}}
                    </div>
                    <div class="form-group">
                        <strong>Direccion:</strong>
                        {{$estudiantes->direccion}}
                    </div>
                    <div class="form-group">
                        <strong>Telefono:</strong>
                        {{$estudiantes->telefono}}
                    </div>
                    <div class="form-group">
                        <strong>Nombre Padre:</strong>
                        {{$estudiantes->NomPadre}}
                    </div>
                    <div class="form-group">
                        <strong>Nombre Madre:</strong>
                        {{$estudiantes->NomMadre}}
                    </div>
                    <div class="form-group">
                        <strong>Ocupacion MA/PA:</strong>
                        {{$estudiantes->ocupacion}}
                    </div>

                    <div class="form-group">
                        <strong>Fecha de Nacimiento:</strong>
                        {{$estudiantes->fecnac}}
                    </div>

                    <div class="form-group">
                        <strong>Lugar de Nacimiento:</strong>
                        {{$estudiantes->lugarnac}}
                    </div>

                    <div class="form-group">
                        <strong>Genero:</strong>
                        {{$estudiantes->genero}}
                    </div>

                    <div class="form-group">
                        <strong>Lugar Estudio:</strong>
                        {{$estudiantes->lugarEstu}}
                    </div>

                    <div class="form-group">
                        <strong>Email:</strong>
                        {{$estudiantes->email}}
                    </div>

                    <div class="form-group">
                        <strong>Año Escolar:</strong>
                        {{$estudiantes->añoEscolar}}
                    </div>

                    <div class="form-group">
                        <strong>Año Bachiller:</strong>
                        {{$estudiantes->añoBachiller}}
                    </div>

                    <div class="form-group">
                        <strong>Asignacion:</strong>
                        {{ $estudiantes->asignacion->materia }}
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
