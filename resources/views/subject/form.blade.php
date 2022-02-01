<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_s') }}
            {{ Form::text('name_s', $subject->name_s, ['class' => 'form-control' . ($errors->has('name_s') ? ' is-invalid' : ''), 'placeholder' => 'Name S']) }}
            {!! $errors->first('name_s', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duration_s') }}
            {{ Form::text('duration_s', $subject->duration_s, ['class' => 'form-control' . ($errors->has('duration_s') ? ' is-invalid' : ''), 'placeholder' => 'Duration S']) }}
            {!! $errors->first('duration_s', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>