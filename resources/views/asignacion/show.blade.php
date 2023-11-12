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
                            <span class="card-title">{{ __('Mostrar') }} Asignacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-focus" href="{{ route('asignacions.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $asignacion->materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


