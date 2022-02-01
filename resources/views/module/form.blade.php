<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_del_modulo') }}
            {{ Form::text('nombre_del_modulo', $module->nombre_del_modulo, ['class' => 'form-control' . ($errors->has('nombre_del_modulo') ? ' is-invalid' : ''), 'placeholder' => 'Name Module']) }}
            {!! $errors->first('nombre_del_modulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio_modulo') }}
            {{ Form::date('beginning_m', $module->beginning_m, ['class' => 'form-control' . ($errors->has('beginning_m') ? ' is-invalid' : ''), 'placeholder' => 'Beginning Module']) }}
            {!! $errors->first('beginning_m', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fin_modulo') }}
            {{ Form::date('end_m', $module->end_m, ['class' => 'form-control' . ($errors->has('end_m') ? ' is-invalid' : ''), 'placeholder' => 'End Module']) }}
            {!! $errors->first('end_m', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>