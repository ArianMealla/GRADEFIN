@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
   
@stop

@section('content')
@can('asignacion-crear')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Añadir') }} Asignacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignacions.store') }}"  role="form" enctype="multipart/form-data">
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