@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
    <h1>CAE</h1>
@stop
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('content')
@can('estudiante-leer')
<div class="container-fluid">
    <div class="card-body">

        <div class="card">


            <div class="card-header">

                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <div class="float-right">
                        <a href="student/create" class="btn btn-dark btn-sm " data-placement="right">AÑADIR ESTUDIANTE</a>
                    </div>
                </div>
            </div>



            <div class="table-responsive">
                <table  id="example" class="table table-striped table-bordered shadow-lg mt-20" style="width:100%">
                    <thead class="bg-dark text black">

                        <tr>
                            <th scope="col">ACCIONES </th>
                            <th scope="col">ID</th>
                            <th scope="col">PATERNO</th>
                            <th scope="col">MATERNO</th>
                            <th scope="col">NOMBRES</th>
                            <th scope="col">CI </th>
                            <th scope="col">ZONA</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">NOMBRE-PADRE</th>
                            <th scope="col">NOMBRE-MADRE</th>
                            <th scope="col">OCUPACION</th>

                            <th scope="col">FECHA NACIMIENTO </th>
                            <th scope="col">LUGAR NAC </th>
                            <th scope="col">GENERO </th>
                            <th scope="col">LUGAR ESTUDIO </th>
                            <th scope="col">EMAIL </th>
                            <th scope="col">AÑO ESCOLAR </th>
                            <th scope="col">AÑO BACHILLER </th>
                            <th scope="col">ASIGNACION </th>







                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{$estudiante->acciones}}
                                <form action=" {{route('student.destroy', $estudiante->id)}}" method="POST">





                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ route('student.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                    
                                        @can('estudiante-modificar')
                                            <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-success btn-sm" href="/student/{{$estudiante->id}}/edit"><i class="fa fa-fw fa-edit"></i></a>
                                        @endcan
                                    
                                    
                                        @can('estudiante-pdf')
                                            <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ route('descargar-pdf') }}"><i class="fa fa-fw fa-edit"></i> {{ __('PDF') }}</a>
                                        @endcan
                                    
                                    
                                        @can('estudiante-eliminar')
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-sm" class="fa fa-fw fa-trash"><i class="fa fa-fw fa-trash"></i></button>
                                        @endcan    
                                    
                                </form>









                                <td>{{$estudiante->id}}</td>
                                <td>{{$estudiante->paterno}}</td>
                                <td>{{$estudiante->materno}}</td>
                                <td>{{$estudiante->nombres}}</td>
                                <td>{{$estudiante->ci}}</td>
                                <td>{{$estudiante->zona}}</td>
                                <td>{{$estudiante->direccion}}</td>
                                <td>{{$estudiante->telefono}}</td>
                                <td>{{$estudiante->NomPadre}}</td>
                                <td>{{$estudiante->NomMadre}}</td>
                                <td>{{$estudiante->ocupacion}}</td>

                                <td>{{$estudiante->fecnac}}</td>
                                <td>{{$estudiante->lugarnac}}</td>
                                <td>{{$estudiante->genero=='1'?'Masculino':'Femenino'}}</td>
                                <td>{{$estudiante->lugarEstu}}</td>
                                <td>{{$estudiante->email}}</td>
                                <td>{{$estudiante->añoEscolar}}</td>
                                <td>{{$estudiante->añoBachiller}}</td>
                                <td>{{$estudiante->asignacion->materia}}</td>



                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endcan
@stop



@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"> </script>

    <script>
        new DataTable('#example');

    </script>
@stop
