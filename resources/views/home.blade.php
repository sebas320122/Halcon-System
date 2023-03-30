@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <!---3.4 Crear boton usuarios para dashboard--->
                                <a class="btn btn-primary" href="{{ route('usuarios.index') }}">Usuarios</a>
                                 <!---4.9 Agregar boton a dashboard--->
                                 <br>
                                 <br>
                                  <!---5.6 Agregar boton a dashboard--->
                                  <a class="btn btn-primary" href="{{ route('ordenes.index') }}">Ordenes</a>
                                <!--6.3 Agregar boton para ordenes archivadas-->
                                <br>
                                 <br>
                                <a class="btn btn-primary" href="{{ route('ordenes.archivadas') }}">Ordenes archivadas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
