@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark">
                <div class="card-body">
                    
                    <!--Contenido-->
                    <div class="small-box bg-info">
  <div class="inner">
    <h3>{{ $ordenesCount }}</h3>
    <p>Ordenes</p>
  </div>
  <div class="icon">
    <i class="fas fa-archive"></i>
  </div>
  
</div>
<div class="small-box bg-gradient-success">
  <div class="inner">
    <h3>{{ $usuariosCount }}</h3>
    <p>Usuarios</p>
  </div>
  <div class="icon">
    <i class="fas fa-user"></i>
  </div>
</div>                    
                </div>
            </div>
        </div>
    </div>
    
@stop
