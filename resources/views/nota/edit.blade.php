@extends('adminlte::page')

@section('title', 'CAE')

@section('content_header')
<h2>ACTUALIZAR NOTA</h2>   
@stop
@section('content')
@can('nota-modificar')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Nota</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notas.update', $nota->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
