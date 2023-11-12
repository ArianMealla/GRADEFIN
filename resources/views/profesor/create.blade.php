@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
   
@stop

@section('content')
@can('profesor-crear')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Añadir') }} Profesor</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profesors.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('profesor.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop