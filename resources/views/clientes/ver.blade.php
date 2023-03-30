@extends('layouts.app')

@section('content')
<!--7.3 agregar view-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Resultado de Búsqueda') }}</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        La orden se encuentra en estado "{{ $orden->estado }}".
                        <!--7.5 mostrar link de imagen enviado/entregado-->
                        
                        @if ($orden->foto_carga)
                            <p>{{ $orden->foto_carga }}</p>
                            <img src="{{ $orden->foto_carga }}" alt="Image" width="600" height="400">
                        @endif

    
                        @if ($orden->foto_entrega)
                            <p>{{ $orden->foto_entrega }}</p>
                            <img src="{{ $orden->foto_entrega }}" alt="Image" width="600" height="400">
                        @endif
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection