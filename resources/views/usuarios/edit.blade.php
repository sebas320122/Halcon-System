@extends('layouts.app') 

@section('content') 
<!--4.3 crear view edit-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Editar datos de usuario
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
      <form method="post" action="{{ route('usuarios.update', $user->id) }}"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group"> 
          <label for="name">Nombre:</label> 
          <input type="text" class="form-control" name="name" value="{{ $user->name }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="email">Email:</label> 
          <input type="text" class="form-control" name="email" value="{{ $user->email }}" /> 
        </div> 
        <!--5.83 Editar formato-->
        <label for="rol">Rol:</label>
<select class="form-control" name="rol" id="rol">
    <option value="admin" {{ $user->rol == 'admin' ? 'selected' : '' }}>admin</option>
    <option value="vendedor" {{ $user->rol == 'vendedor' ? 'selected' : '' }}>vendedor</option>
    <option value="almacen" {{ $user->rol == 'almacen' ? 'selected' : '' }}>almacen</option>
    <option value="compras" {{ $user->rol == 'compras' ? 'selected' : '' }}>compras</option>
    <option value="transitorio" {{ $user->rol == 'transitorio' ? 'selected' : '' }}>transitorio</option>
</select>

<label for="status">Estado:</label>
<select class="form-control" name="status" id="status">
    <option value="activo" {{ $user->status == 'activo' ? 'selected' : '' }}>activo</option>
    <option value="inactivo" {{ $user->status == 'inactivo' ? 'selected' : '' }}>inactivo</option>
</select>
        
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection 