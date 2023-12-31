@extends('adminlte::page')

@section('content')
    @can('usuario-crear')
        <div class="row">
            <h1>Administración de Usuarios</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" style="font-size: 15px">
                        <div class="modal-body">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="textHelp" value="">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="textHelp" value="">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    aria-describedby="textHelp" value="">
                            </div>

                            <div class="mb-3">
                                <label for="conf-password" class="form-label">Confirmación password</label>
                                <input type="password" class="form-control" id="conf-password" name="conf-password"
                                    aria-describedby="textHelp" value="">
                            </div>

                            @foreach ($listaR as $r)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $r }}"
                                        id="flexCheckDefault" name="roles[]">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $r }}
                                    </label>
                                </div>
                            @endforeach


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
    @endcan


    @stop
