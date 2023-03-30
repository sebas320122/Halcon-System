@extends('layouts.app')

@section('content')
<!--5.1 modificar view index-->
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
    
      <a class="btn btn-primary" href="{{ route('ordenes.create') }}">Add</a> 
    

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>N. Cliente</th> 
          <th>N. Factura</th>  
          <th>Direccion</th>  
          <th>Estado</th> 
          <th>Material Id</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($ordens as $orden) 
          <tr> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->id }}</a></td> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->num_cliente }}</a></td> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->num_factura }}</a></td> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->direccion }}</a></td> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->estado }}</a></td> 
            <td><a href="{{ route('ordenes.show', $orden->id) }}">{{ $orden->material_id }}</a></td> 
            <td><a href="{{ route('ordenes.edit', $orden->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('ordenes.destroy', $orden->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
               
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
      </table> 
  <div> 
@endsection
