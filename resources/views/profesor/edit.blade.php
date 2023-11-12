@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
   
@stop

@section('content')
@can('profesor-modificar')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }} Profesor</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profesors.update', $profesor->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
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
