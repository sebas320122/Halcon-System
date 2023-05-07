@extends('layouts.app')

@section('content')
<!--7.3 agregar view-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">{{ __('Informacion de orden') }}</div>

                <div class="card-body bg-dark text-white">
                    <div class="alert alert-primary" role="alert">
                        Estado de orden: "{{ $orden->estado }}".
                        
                        <!--7.5 mostrar link de imagen enviado/entregado-->
                        
                        
                    </div>   
                    @if ($orden->foto_carga)
                            <!--<p>{{ $orden->foto_carga }}</p>-->
                            <img src="{{ asset('storage/' . $orden->foto_carga) }}" alt="Imagen" class="img-fluid">
                        @endif

                        @if ($orden->foto_entrega)
                            <!--<p>{{ $orden->foto_entrega }}</p>-->
                            <img src="{{ asset('storage/' . $orden->foto_entrega) }}" alt="Imagen" class="img-fluid">
                        @endif                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection