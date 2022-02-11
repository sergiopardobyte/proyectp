<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_matricula') }}
            {{ Form::text('fecha_matricula', $matricula->fecha_matricula, ['class' => 'form-control' . ($errors->has('fecha_matricula') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Matricula']) }}
            {!! $errors->first('fecha_matricula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagos_id') }}
            {{ Form::text('pagos_id', $matricula->pagos_id, ['class' => 'form-control' . ($errors->has('pagos_id') ? ' is-invalid' : ''), 'placeholder' => 'Pagos Id']) }}
            {!! $errors->first('pagos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>