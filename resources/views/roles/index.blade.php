@extends('adminlte::page')

@section('content')
    @can('rol-leer')
        <h1>Lista de Roles</h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE PERMISO</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaL as $l)
                        <tr>
                            <th>{{ $l->id }}</th>
                            <td>{{ $l->name }}</td>

                            <td>
                                @can('rol-modificar')
                                    <a href="{{ url('roles/' . $l->id . '/edit') }}" class="btn btn-warning">Modificar</a>
                                @endcan


                            </td>

                            <td>
                                @can('rol-eliminar')
                                    <form action="{{ url('roles/' . $l->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay datos...</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    @endcan

@stop