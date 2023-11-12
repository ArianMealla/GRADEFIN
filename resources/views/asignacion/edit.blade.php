@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
   
@stop
@section('content')
@can('asignacion-modificar')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Asignacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignacions.update', $asignacion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asignacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endcan
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
