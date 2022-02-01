<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jornada_s') }}
            {{ Form::text('jornada_s', $section->jornada_s, ['class' => 'form-control' . ($errors->has('jornada_s') ? ' is-invalid' : ''), 'placeholder' => 'Jornada S']) }}
            {!! $errors->first('jornada_s', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>