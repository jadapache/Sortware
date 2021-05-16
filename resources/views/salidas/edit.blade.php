@extends('adminlte::page')

@section('title', 'Sortware | Editar Usuario')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Usuario</h2>
@stop

@section('content')



{{-- <a style="margin-left: 830px;" href="password" class="btn btn-info ">Cambiar Contraseña de Usuario</a> --}}



 <form action="/salidas/{{$salida->id}}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">  
        <input id="id" name="id" type="text" class="form-control" value="{{$salida->id}}" tabindex="1" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <input id="id_producto" name="id_producto"  class="form-control" value="{{$salida->producto_id}}" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Unidades</label>
        <input id="unidadessal" name="unidadessal"  class="form-control" value="{{$salida->unidadessal}}" tabindex="2" required>
    </div>
    
    {{-- <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" value="{{$usuario->password}}" tabindex="6" required>
    </div> --}}
    
    <form action="/salidas/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">  
            <input id="id" name="id" type="text" class="form-control" value="{{$producto->id}}" tabindex="1" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <input id="id_producto" name="id_producto"  class="form-control" value="{{$producto->nombreP}}" tabindex="2" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Unidades</label>
            <input id="unidades" name="unidades"  class="form-control" value="{{($producto->unidades)-($salida->unidadessal)}}" tabindex="2" required>
        </div>
        
        {{-- <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input id="password" name="password" type="password" class="form-control" value="{{$usuario->password}}" tabindex="6" required>
        </div> --}}
        <a style="margin-left: 880px;"  href="/salidas" class="btn btn-secondary "  tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button> 
        
    </form>
</form>
{{($producto->unidades)-($salida->unidadessal)}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop