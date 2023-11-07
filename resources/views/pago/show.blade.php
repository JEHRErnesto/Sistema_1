@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Mostrar') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pago->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Plazo:</strong>
                            {{ $pago->Plazo }}
                        </div>
                        <div class="form-group">
                            <strong>Inicia:</strong>
                            {{ $pago->Inicia }}
                        </div>
                        <div class="form-group">
                            <strong>Finaliza:</strong>
                            {{ $pago->Finaliza }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
