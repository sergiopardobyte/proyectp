<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_c') }}
            {{ Form::text('name_c', $career->name_c, ['class' => 'form-control' . ($errors->has('name_c') ? ' is-invalid' : ''), 'placeholder' => 'Name C']) }}
            {!! $errors->first('name_c', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duration_c') }}
            {{ Form::text('duration_c', $career->duration_c, ['class' => 'form-control' . ($errors->has('duration_c') ? ' is-invalid' : ''), 'placeholder' => 'Duration C']) }}
            {!! $errors->first('duration_c', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>