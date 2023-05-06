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
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    
      <a class="btn btn-primary" href="{{ route('usuarios.create') }}">Add</a> 
    

    <table class="table table-striped"> 
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
  <div> 
@stop
