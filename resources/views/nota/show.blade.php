@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
<h2>MOSTRAR NOTA</h2>   
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estudiantes Id:</strong>
                            {{ $nota->estudiantes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor Id:</strong>
                            {{ $nota->profesor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $nota->nota }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $nota->comentario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
