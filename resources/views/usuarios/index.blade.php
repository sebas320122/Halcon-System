@extends('adminlte::page')

@section('title', 'Ver usuarios')

@section('content')

<!--4.1 modificar view index-->
<style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    <!--Recibir alertas-->
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    @if (session()->get('info')) 
      <div class="alert alert-info"> 
        {{ session()->get('info') }} 
      </div><br /> 
    @endif 
    @if (session()->get('danger')) 
      <div class="alert alert-danger"> 
        {{ session()->get('danger') }} 
      </div><br /> 
    @endif 
 
    <a class="btn btn-success" href="{{ route('usuarios.create') }}">Add</a> 
    <table class="table table-striped table-dark" id="tabla"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>Nombre</th> 
          <th>Email</th> 
          <th>Rol</th> 
          <th>Estado</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($users as $user) 
          <tr> 
            <td><a href="{{ route('usuarios.show', $user->id) }}">{{ $user->id }}</a></td> 
            <td><a href="{{ route('usuarios.show', $user->id) }}">{{ $user->name }}</a></td> 
            <td><a href="{{ route('usuarios.show', $user->id) }}">{{ $user->email }}</a></td> 
            <td><a href="{{ route('usuarios.show', $user->id) }}">{{ $user->rol }}</a></td> 
            <td><a href="{{ route('usuarios.show', $user->id) }}">{{ $user->status }}</a></td> 
            <td><a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('usuarios.destroy', $user->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
      </table> 

       <!--Recibir notificaciones-->
      @if (session()->get('toast'))
      <div class="toast show">
    <div class="toast-header">
    <strong class="me-auto">Notificacion</strong>
      <button type="button" class="btn btn-light btn-sm align-self-end ml-auto" data-bs-dismiss="toast">X</button>
    </div>
    <div class="toast-body">
    {{ session()->get('toast') }} 
    </div>
    </div>
    @endif

  <div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
@stop
