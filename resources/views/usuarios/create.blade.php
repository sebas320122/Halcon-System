@extends('adminlte::page')

@section('title', 'Agregar usuario')
@section('content') 
<!--4.2 crear view create-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Registrar usuario 
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
      <form method="post" action="{{ route('usuarios.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="name">Nombre:</label> 
          <input type="text" class="form-control" name="name" /> 
        </div> 
        <div class="form-group"> 
          <label for="email">Email:</label> 
          <input type="text" class="form-control" name="email" /> 
        </div> 
        <div class="form-group"> 
          <label for="password">Codigo:</label> 
          <input type="text" class="form-control" name="password" /> 
        </div> 
        <!--5.82 Editar formato-->
        <label for="rol">Rol:</label>
    <select class="form-control" name="rol" id="rol">
        <option value="admin">admin</option>
        <option value="vendedor">vendedor</option>
        <option value="almacen">almacen</option>
        <option value="compras">compras</option>
        <option value="transitorio">transitorio</option>
    </select> 
    
    <label for="status">Estado:</label>
    <select class="form-control" name="status" id="status">
        <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select> 
        
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@stop 