@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
<h2>CREAR NOTA</h2>   
@stop
@section('content')
@can('nota-crear')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Nota</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('nota.form')

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
