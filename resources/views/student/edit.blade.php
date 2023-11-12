@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>EDITAR ALUMNOS</h2>
@stop

@section('content')
@can('estudiante-modificar')
    <section class="content container-fluid">

        <form action="/student/{{$estudiante->id}}" method="POST">
        @csrf
        @method('PUT')
        <!-------------------SECCION PARA EDITAR APELLIDO PATERNO-------------------------->

        <div class="mb-3">
            <label for="" class="form-label">APELLIDO PATERNO:</label>
            <input id="paterno" name="paterno" type="text" class="form-control" value="{{$estudiante->paterno}}" tabindex="1">

        </div>

        <!-------------------SECCION PARA EDITAR APELLIDO MATERNO---------------------------->

        <div class="mb-3">
            <label for="" class="form-label">APELLIDO MATERNO:</label>
            <input id="materno" name="materno" type="text" class="form-control" value="{{$estudiante->materno}}" tabindex="2">

        </div>

        <!-------------------SECCION PARA EDITAR NOMBRES DEL ESTUDIANTE----------------------->
        <div class="mb-3">
            <label for="" class="form-label">NOMBRES:</label>
            <input id="nombres" name="nombres" type="text" class="form-control" value="{{$estudiante->nombres}}" tabindex="3">

        </div>

        <!------------------SECCION PARA EDITAR CARNER DE IDENTIDAD--------------------------->
        <div class="mb-3">
            <label for="" class="form-label">CI:</label>
            <input id="ci" name="ci" type="text" class="form-control" value="{{$estudiante->ci}}" tabindex="4">

        </div>

        <!------------------SECCION PARA EDITAR ZONA DONDE VIVE EL ESTUDIANTE----------------->
        <div class="mb-3">
            <label for="" class="form-label">ZONA:</label>
            <input id="zona" name="zona" type="text" class="form-control" value="{{$estudiante->zona}}" tabindex="5">

        </div>

        <!--------------SECCION PARA EDITAR DIRECCION EXACTA DE DONDE VIVE EL ESTUDIANTE------->
        <div class="mb-3">
            <label for="" class="form-label">DIRECCION:</label>
            <input id="direccion" name="direccion" type="text" class="form-control" value="{{$estudiante->direccion}}" tabindex="6">

        </div>

        <!--------------------SECCION PARA EDITAR TELEFONO DE REFERENCIA--------------------->
        <div class="mb-3">

            <label for="" class="form-label">TELEFONO:</label>
            <input id="telefono" name="telefono" type="text" class="form-control" value="{{$estudiante->telefono}}" tabindex="7">

        </div>

        <!--------------------SECCION PARA EDITAR NOMBRE DEL PADRE DEL ALUMNO------------------>
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE DEL PADRE:</label>
            <input id="NomPadre" name="NomPadre" type="text" class="form-control" value="{{$estudiante->NomPadre}}" tabindex="8">

        </div>

        <!--------------------SECCION PARA EDITAR NOMBRE DE LA MADRE DEL ALUMNO----------------->
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE DE LA MADRE:</label>
            <input id="NomMadre" name="NomMadre" type="text" class="form-control" value="{{$estudiante->NomMadre}}" tabindex="9">

        </div>

        <!-------------------SECCION PARA EDITAR OCUPACION DE LOS PADRES DEL ALUMNO-------------->
        <div class="mb-3">
            <label for="" class="form-label">OCUPACION DE LOS PADRES:</label>
            <input id="ocupacion" name="ocupacion" type="text" class="form-control" value="{{$estudiante->ocupacion}}" tabindex="10">

        </div>



        <!----------------SECCION PARA EDITAR FECHA DE NACIMIENTO DEL ALUMNO------------------------>
        <div class="mb-3">
            <label for="" class="form-label">FECHA DE NACIMIENTO DEL ESTUDIANTE:</label>

            <input type="date" id="fecnac" name="fecnac"  value="{{$estudiante->fecnac}}"required><br><br>

        </div>

        <!-------------------SECCION PARA EDITAR LUGAR DE NACIMIENTO DEL ALUMNO------------------->
        <label for="fecha">LUGAR DE NACIMIENTO DEL ESTUDIANTE:</label>
        <input id="lugarnac" name="lugarnac" type="text" class="form-control" value="{{$estudiante->lugarnac}}" tabindex="13">

        <!----------------------SECCION PARA EDITAR GENERO DEL ALUMNO------------------------------->
        <div class="row">
            <div class="form-group col-12 my-3">
                <h5><label for="modelo" class="control-label"></label>
                    GENERO</h5>
                <div>
                    <input type="text" class="form-control" id="genero" name="genero" value="{{$estudiante->genero}}" required>
                </div>
            </div>
        </div>

            <!------------------SECCION PARA EDITAR LUGAR DE ESTUDIO DEL ALUMNO---------------------->
        <div class="mb-3">
            <label for="" class="form-label">LUGAR DE ESTUDIO:</label>
            <input id="lugarEstu" name="lugarEstu" type="text" class="form-control" value="{{$estudiante->lugarEstu}}" tabindex="16">

        </div>

        <!------------------------SECCION PARA EDITAR EMAIL DEL ALUMNO--------------------------------->
        <div class="mb-3">
            <label for="" class="form-label">EMAIL:</label>
            <input id="email" name="email" type="text" class="form-control" value="{{$estudiante->email}}" tabindex="17">

        </div>

        <!--------------------------SECCION PARA EDITAR AÑO ESCOLAR DEL ALUMNO---------------------------->
        <div class="mb-3">
            <label for="" class="form-label">AÑO ESCOLAR:</label>
            <input id="añoEscolar" name="añoEscolar" type="text" class="form-control" value="{{$estudiante->añoEscolar}}" tabindex="18">

        </div>

        <!--------------------------SECCION PARA EDITAR AÑO QUE SE GRADUO EL ALUMNO------------------------>
        <div class="mb-3">
            <label for="" class="form-label">AÑO BACHILLER:</label>
            <input id="añoBachiller" name="añoBachiller" type="text" class="form-control" value="{{$estudiante->añoBachiller}}" tabindex="19">

        </div>

        <!-----------------------SECCION PARA EDITAR MATERIA QUE ESCOGIO EL ALUMNO-------------------------->
        <div class="mb-3">
            <label for="" class="form-label">ASIGNACION</label>
            <select name="asignacions_id" id="asignacions_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Open this select menu</option>
                @foreach ($asignacions as $asignacion)
                    <option value="{{$asignacion['id']}}">{{$asignacion['materia']}}</option>

                @endforeach

            </select>

        </div>





    <a href="/student" class="btn btn-secondary" tabindex="7"> CANCEL</a>
    <button type="submit" class="btn btn-success" tabindex="8"> SAVE</button>
    </form>
</section>
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
