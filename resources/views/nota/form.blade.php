<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estudiantes_id') }}
            {{ Form::select('estudiantes_id',$estudiantes, $nota->estudiantes_id, ['class' => 'form-control' . ($errors->has('estudiantes_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiantes Id']) }}
            {!! $errors->first('estudiantes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesor_id') }}
            {{ Form::select('profesor_id',$profesor, $nota->profesor_id, ['class' => 'form-control' . ($errors->has('profesor_id') ? ' is-invalid' : ''), 'placeholder' => 'Profesor Id']) }}
            {!! $errors->first('profesor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $nota->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentario') }}
            {{ Form::text('comentario', $nota->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>