<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipode_pago') }}
            {{ Form::text('tipode_pago', $pago->tipode_pago, ['class' => 'form-control' . ($errors->has('tipode_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipode Pago']) }}
            {!! $errors->first('tipode_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>