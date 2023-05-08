@extends('adminlte::page')

@section('title', 'Editar orden')
@section('content') 
<!--5.3 crear view edit-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper bg-dark"> 
    <div class="card-header bg-info"> 
      Editar datos de orden
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
      <!--7.41 editar form post-->
      <form method="post" action="{{ route('ordenes.update', $orden->id) }}" enctype="multipart/form-data"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group"> 
          <label for="num_cliente">N. Cliente:</label> 
          <input type="number" class="form-control" name="num_cliente" value="{{ $orden->num_cliente }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="num_factura">N. Factura:</label> 
          <input type="number" class="form-control" name="num_factura" value="{{ $orden->num_factura }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="empresa">Empresa:</label> 
          <input type="text" class="form-control" name="empresa" value="{{ $orden->empresa }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="datos_fiscales">Datos fiscales:</label> 
          <input type="text" class="form-control" name="datos_fiscales" value="{{ $orden->datos_fiscales }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="direccion">Direccion:</label> 
          <input type="text" class="form-control" name="direccion" value="{{ $orden->direccion }}" /> 
        </div> 
        <div class="form-group"> 
          <!--5.8 editar campo de estado para seleccion unica-->
        <label for="estado">Estado:</label>
    <select class="form-control" name="estado" id="estado">
    <option value="procesando" {{ $orden->estado == 'procesando' ? 'selected' : '' }}>procesando</option>
    <option value="enviado" {{ $orden->estado == 'enviado' ? 'selected' : '' }}>enviado</option>
    <option value="entregado" {{ $orden->estado == 'entregado' ? 'selected' : '' }}>entregado</option>
    <option value="archivado" {{ $orden->estado == 'archivado' ? 'selected' : '' }}>archivado</option>
</select>
        </div> 
        <div class="form-group"> 
          <label for="material_id">Material Id:</label> 
          <input type="text" class="form-control" name="material_id" value="{{ $orden->material_id }}" /> 
          @error('material_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div> 

    <!--Campo para subir fotos oculto-->
   <div class="form-group" id="foto_carga_div" style="display:none;">
    <label for="foto_carga">Foto de carga:</label>
    <br>
    <input type="file" class="form-control-file" id="foto_carga" name="foto_carga">
</div>
<div class="form-group" id="foto_entrega_div" style="display:none;">
    <label for="foto_entrega">Foto de entrega:</label>
    <br>
    <input type="file" class="form-control-file" id="foto_entrega" name="foto_entrega">
</div>
<!--Mostrar si tienen estos estados-->
@if($orden->estado == 'enviado')
    <script>
        document.getElementById("foto_carga_div").style.display = "block";
    </script>
@elseif($orden->estado == 'entregado')
    <script>
        document.getElementById("foto_entrega_div").style.display = "block";
    </script>
@endif

        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('ordenes.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@stop 