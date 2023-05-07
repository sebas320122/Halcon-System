@extends('adminlte::page')

@section('title', 'Ver ordenes')

@section('content')
<!--5.1 modificar view index-->
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
    
      <a class="btn btn-success" href="{{ route('ordenes.create') }}">Add</a> 
    

    <table class="table table-striped table-dark"> 
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
