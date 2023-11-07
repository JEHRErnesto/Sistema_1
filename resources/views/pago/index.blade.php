@extends('layouts.app')

@section('template_title')
    Pago
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar pago') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Cantidad a pagar mensualmente</th>
										<th>Plazo</th>
										<th>Inicia</th>
										<th>Finaliza</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagos as $pago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pago->Cantidad }}</td>
											<td>{{ $pago->Plazo }}</td>
											<td>{{ $pago->Inicia }}</td>
											<td>{{ $pago->Finaliza }}</td>

                                            <td>
                                                <form action="{{ route('pagos.destroy',$pago->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pagos.show',$pago->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pagos.edit',$pago->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pagos->links() !!}
            </div>
        </div>
    </div>
@endsection
