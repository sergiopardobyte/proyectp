<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('student_id') }}
            {{ Form::text('student_id', $estdoc->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Student Id']) }}
            {!! $errors->first('student_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teacher_id') }}
            {{ Form::text('teacher_id', $estdoc->teacher_id, ['class' => 'form-control' . ($errors->has('teacher_id') ? ' is-invalid' : ''), 'placeholder' => 'Teacher Id']) }}
            {!! $errors->first('teacher_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>