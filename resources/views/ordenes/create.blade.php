@extends('adminlte::page')

@section('title', 'Agregar orden')
@section('content') 
<!--5.2 crear view create-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper bg-dark"> 
    <div class="card-header bg-success"> 
      Agregar orden 
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
      <form method="post" action="{{ route('ordenes.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="num_cliente">N. cliente:</label> 
          <input type="number" class="form-control" name="num_cliente" /> 
        </div> 
        <div class="form-group"> 
          <label for="num_factura">N. factura:</label> 
          <input type="number" class="form-control" name="num_factura" /> 
        </div> 
        <div class="form-group"> 
          <label for="empresa">Empresa:</label> 
          <input type="text" class="form-control" name="empresa" /> 
        </div> 
        <div class="form-group"> 
          <label for="datos_fiscales">Datos fiscales:</label> 
          <input type="text" class="form-control" name="datos_fiscales" /> 
        </div> 
        <div class="form-group"> 
          <label for="direccion">Direccion:</label> 
          <input type="text" class="form-control" name="direccion" /> 
        </div> 
        <div class="form-group"> 
<!--5.81 editar campo de estado para seleccion unica-->
        <label for="estado">Estado:</label>
    <select class="form-control" name="estado" id="estado">
        <option value="procesando">procesando</option>
        <option value="enviado">enviado</option>
        <option value="entregado">entregado</option>
    </select>
        </div> 
        <div class="form-group"> 
          <label for="material_id">Material Id:</label> 
          <input type="number" class="form-control" name="material_id" /> 
        </div> 
        

        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('ordenes.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@stop 