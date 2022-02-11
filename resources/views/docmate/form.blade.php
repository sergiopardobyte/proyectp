<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('teacher_id') }}
            {{ Form::text('teacher_id', $docmate->teacher_id, ['class' => 'form-control' . ($errors->has('teacher_id') ? ' is-invalid' : ''), 'placeholder' => 'Teacher Id']) }}
            {!! $errors->first('teacher_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subject_id') }}
            {{ Form::text('subject_id', $docmate->subject_id, ['class' => 'form-control' . ($errors->has('subject_id') ? ' is-invalid' : ''), 'placeholder' => 'Subject Id']) }}
            {!! $errors->first('subject_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>