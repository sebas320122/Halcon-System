@extends('adminlte::page')

@section('title', 'Informacion de orden')
@section('content') 
<!--5.4 crear view show-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper bg-dark"> 
    <div class="card-header bg-secondary"> 
      Ver datos de orden 
    </div> 

    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 

      <div class="form-group"> 
        <label for="num_cliente">N. Cliente:</label> 
        <input type="number" class="form-control" name="num_cliente" value="{{ $orden->num_cliente }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="num_factura">N. Factura:</label> 
        <input type="number" class="form-control" name="num_factura" value="{{ $orden->num_factura }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="empresa">Empresa:</label> 
        <input type="text" class="form-control" name="empresa" value="{{ $orden->empresa }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="datos_fiscales">Datos fiscales:</label> 
        <input type="text" class="form-control" name="datos_fiscales" value="{{ $orden->datos_fiscales }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="direccion">Direccion:</label> 
        <input type="text" class="form-control" name="direccion" value="{{ $orden->direccion }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="estado">Estado:</label> 
        <input type="text" class="form-control" name="estado" value="{{ $orden->estado }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="material_id">Material Id:</label> 
        <input type="text" class="form-control" name="material_id" value="{{ $orden->material_id }}" disabled /> 
      </div> 

      <a href="{{ route('ordenes.edit', $orden->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('ordenes.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@stop 