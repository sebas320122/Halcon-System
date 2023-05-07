@extends('layouts.app')

@section('content')
<!--7.2 agregar view-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">{{ __('Buscar Orden') }}</div>

                <div class="card-body bg-dark text-white">
                    <form action="{{ route('clientes.inicio') }}" method="GET">
                        @csrf
                        

                        <div class="form-group">
                            <label for="num_factura">{{ __('Número de Factura') }}</label>
                            <input type="number" class="form-control" name="num_factura" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">{{ __('Buscar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection