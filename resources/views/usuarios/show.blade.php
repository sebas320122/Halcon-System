@extends('layouts.app') 

@section('content') 
<!--4.4 crear view show-->
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Ver datos 
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
        <label for="name">Nombre:</label> 
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="email">Email:</label> 
        <input type="text" class="form-control" name="email" value="{{ $user->email }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="rol">Rol:</label> 
        <input type="text" class="form-control" name="rol" value="{{ $user->rol }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="status">Estado:</label> 
        <input type="text" class="form-control" name="status" value="{{ $user->status }}" disabled /> 
      </div> 
      <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 