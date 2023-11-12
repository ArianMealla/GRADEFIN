@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
<h2>CREAR ALUMNOS</h2>
@stop

@section('content')
@can('estudiante-crear')

<div class="card card-default">

    <div class="card-body">
        <section class="content container-fluid">

            <form action="/student" method="POST">
                @csrf

<div class="container">
    <div class="row">
        <!-------------------SECCION PARA PONER APELLIDO PATERNO-------------------------->
        <div class="mb-3 col">
            <label for="" class="form-label">APELLIDO PATERNO:</label>
            <input id="paterno" name="paterno" type="text" class="form-control" tabindex="1">
            @error('paterno')
            <small>
                <strong>{{$message}}</strong>
            </small>
            @enderror

        </div>

        <!-------------------SECCION PARA PONER APELLIDO MATERNO---------------------------->

        <div class="mb-3 col">
            <label for="" class="form-label">APELLIDO MATERNO:</label>
            <input id="materno" name="materno" type="text" class="form-control"  tabindex="2">
            @error('materno')
            <small>
                <strong>{{$message}}</strong>
            </small>

            @enderror
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
                <!-------------------SECCION PARA PONER NOMBRES DEL ESTUDIANTE----------------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">NOMBRES:</label>
                    <input id="nombres" name="nombres" type="text" class="form-control" tabindex="3">
                    @error('nombres')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>

                <!------------------SECCION PARA PONER CARNER DE IDENTIDAD--------------------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">CI: (ext:lp,pn,bn)</label>
                    <input id="ci" name="ci" type="text" class="form-control" tabindex="4">
                    @error('ci')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror

                </div>
    </div>
</div>

<div class="container">
    <div class="row">
                <!------------------SECCION PARA PONER ZONA DONDE VIVE EL ESTUDIANTE----------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">ZONA:</label>
                    <input id="zona" name="zona" type="text" class="form-control" tabindex="5">
                    @error('zona')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>

                <!--------------SECCION PARA PONER DIRECCION EXACTA DE DONDE VIVE EL ESTUDIANTE------->
                <div class="mb-3 col">
                    <label for="" class="form-label">DIRECCION:</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="6">
                    @error('direccion')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>
    </div>
</div>

<div class="container">
    <div class="row">
                <!--------------------SECCION PARA PONER TELEFONO DE REFERENCIA--------------------->
                <div class="mb-3 col">

                    <label for="" class="form-label">TELEFONO:(numerico)</label>
                    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="7">
                    @error('telefono')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>

                <!--------------------SECCION PARA PONER NOMBRE DEL PADRE DEL ALUMNO------------------>
                <div class="mb-3 col">
                    <label for="" class="form-label">NOMBRE DEL PADRE:</label>
                    <input id="NomPadre" name="NomPadre" type="text" class="form-control" tabindex="8">
                    @error('NomPadre')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>

                <!--------------------SECCION PARA PONER NOMBRE DE LA MADRE DEL ALUMNO----------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">NOMBRE DE LA MADRE:</label>
                    <input id="NomMadre" name="NomMadre" type="text" class="form-control" tabindex="9">
                    @error('NomMadre')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>
    </div>
</div>

<div class="container">
    <div class="row">
                <!-------------------SECCION PARA PONER OCUPACION DE LOS PADRES DEL ALUMNO-------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">OCUPACION DE LOS PADRES:</label>
                    <input id="ocupacion" name="ocupacion" type="text" class="form-control" tabindex="10">
                    @error('ocupacion')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>








    </div>
</div>
                 <!----------------SECCION PARA PONER FECHA DE NACIMIENTO DEL ALUMNO------------------------>
                <div class="mb-3 col">
                    <label style="width: 100%" for="" class="form-label">FECHA DE NACIMIENTO DEL ESTUDIANTE:</label>

                    <input type="date" id="fecnac" name="fecnac" required><br><br>


                </div>

<div class="container">
    <div class="row">
                <!-------------------SECCION PARA PONER LUGAR DE NACIMIENTO DEL ALUMNO------------------->
                <div class="mb-3 col">
                    <label for="fecha">LUGAR DE NACIMIENTO DEL ESTUDIANTE:</label>
                    <input id="lugarnac" name="lugarnac" type="text" class="form-control" tabindex="13">
                    @error('lugarnac')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>
                <!----------------------SECCION PARA PONER GENERO DEL ALUMNO------------------------------->
                <div class="mb-3 col">
                    <div class="form-group col-12 my-3">
                        <label for="genero" class="control-label">GENERO:</label>

                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="genero1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    MASCULINO
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="genero2" value="0">
                                <label class="form-check-label" for="exampleRadios2">
                                    FEMENINO
                                </label>
                            </div>
                    </div>
                </div>
    </div>
</div>

<div class="container">
    <div class="row">
                    <!------------------SECCION PARA PONER LUGAR DE ESTUDIO DEL ALUMNO---------------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">LUGAR DE ESTUDIO:</label>
                    <input id="lugarEstu" name="lugarEstu" type="text" class="form-control" tabindex="16">
                    @error('lugarEstu')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror

                </div>

                <!------------------------SECCION PARA PONER EMAIL DEL ALUMNO--------------------------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">EMAIL:</label>
                    <input id="email" name="email" type="text" class="form-control" tabindex="17">
                    @error('email')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>
    </div>
</div>

<div class="container">
    <div class="row">
                <!--------------------------SECCION PARA PONER AÑO ESCOLAR DEL ALUMNO---------------------------->
                <div class="mb-3 col">
                    <label for="" class="form-label">AÑO ESCOLAR: (numerico)</label>
                    <input id="añoEscolar" name="añoEscolar" type="text" class="form-control" tabindex="18">
                    @error('añoEscolar')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>

                <!--------------------------SECCION PARA PONER AÑO QUE SE GRADUO EL ALUMNO------------------------>
                <div class="mb-3 col">
                    <label for="" class="form-label">AÑO BACHILLER: (numerico)</label>
                    <input id="añoBachiller" name="añoBachiller" type="text" class="form-control" tabindex="19">
                    @error('añoBachiller')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                    @enderror
                </div>
    </div>
</div>

                <!-----------------------SECCION PARA PONER MATERIA QUE ESCOGIO EL ALUMNO-------------------------->

                <div class="mb-3">
                    <label for="" class="form-label">ASIGNACION</label>
                    <select style="width: 100%" name="asignacions_id" id="asignacions_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <option selected>SELECCIONE UNA MATERIA</option>
                        @foreach ($asignacions as $asignacion)
                            <option value="{{$asignacion['id']}}">{{$asignacion['materia']}}</option>

                        @endforeach

                    </select>

                </div>



                <div class="box-footer mt20">
                    <a href="/student" class="btn btn-dark" tabindex="7"> CANCEL</a>
                </div>
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-success">{{ __('Subir') }}</button>
                </div>

            </form>

            @stop




        </section>
    </div>
</div>
@endcan
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
