@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
<h2> NOTA</h2>
@stop

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('content')
@can('nota-leer')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">



                             <div class="float-right">
                                <a href="{{ route('notas.create') }}" class="btn btn-dark btn-sm float-right"  data-placement="left">
                                  {{ __('AÑADIR NOTA') }}
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
                                        <th>No</th>

										<th>Estudiantes Id</th>
										<th>Profesor Id</th>
										<th>Nota</th>
										<th>Comentario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $nota->estudiante->paterno }}</td>
											<td>{{ $nota->profesor->nombre }}</td>
											<td>{{ $nota->nota }}</td>
											<td>{{ $nota->comentario }}</td>

                                            <td>
                                                <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notas.show',$nota->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    @can('nota-modificar')
                                                        <a class="btn btn-sm btn-success" href="{{ route('notas.edit',$nota->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @endcan

                                                    @can('nota-pdf')
                                                        <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ url('download-estudiante-pdf/'.$nota->estudiantes_id) }}"><i class="fa-fw fa-file-pdf-o"></i> {{ __('PDF') }}</a>
                                                    @endcan
                                                    
                                                    @can('nota-eliminar')
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
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
                {!! $notas->links() !!}
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
