@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')

@stop

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('content')
@can('asignacion-leer')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">



                             <div class="float-right">
                                <a href="{{ route('asignacions.create') }}" class="btn btn-dark btn-sm float-right"  data-placement="right">
                                  {{ __('Añadir Asignacion') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

										<th>MATERIA</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignacions as $asignacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $asignacion->materia }}</td>

                                            <td>
                                                <form action="{{ route('asignacions.destroy',$asignacion->id) }}" method="POST">
                                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ route('asignacions.show',$asignacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    @can('asignacion-modificar')
                                                        <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-success btn-sm" href="{{ route('asignacions.edit',$asignacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @endcan

                                                    @can('asignacion-eliminar')
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asignacions->links() !!}
            </div>
        </div>
    </div>
@endcan
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"> </script>

    <script>
        new DataTable('#example');

    </script>
@stop
