@extends('adminlte::page')

@section('title', 'Sortware | Cambiar Contraseña')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cambiar contraseña</h2>
@stop

@section('content')

 <form action="/usuarios/{{$usuario->id}}/password" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" value="{{$usuario->password}}" tabindex="2" required>
    </div>
    <a style="margin-left: 880px;"  href="/usuarios" class="btn btn-secondary "  tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button> 
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop