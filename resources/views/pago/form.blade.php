<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $pago->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plazo') }}
            {{ Form::text('Plazo', $pago->Plazo, ['class' => 'form-control' . ($errors->has('Plazo') ? ' is-invalid' : ''), 'placeholder' => 'Plazo']) }}
            {!! $errors->first('Plazo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Inicia') }}
            {{ Form::date('Inicia', $pago->Inicia, ['class' => 'form-control' . ($errors->has('Inicia') ? ' is-invalid' : ''), 'placeholder' => 'Inicia']) }}
            {!! $errors->first('Inicia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Finaliza') }}
            {{ Form::date('Finaliza', $pago->Finaliza, ['class' => 'form-control' . ($errors->has('Finaliza') ? ' is-invalid' : ''), 'placeholder' => 'Finaliza']) }}
            {!! $errors->first('Finaliza', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>