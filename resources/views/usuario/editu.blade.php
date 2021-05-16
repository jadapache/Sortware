@extends('adminlte::page')

@section('title', 'Sortware | Editar Usuario')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Usuario</h2>
@stop

@section('content')



<a style="margin-left: 830px;" href="password" class="btn btn-info ">Cambiar Contraseña de Usuario</a>



 <form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">  
        <input id="id" name="id" type="text" class="form-control" value="{{$usuario->id}}" tabindex="1" hidden>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="email" name="email" type="text" class="form-control" value="{{$usuario->email}}" tabindex="3" required>
    </div>
    
    <div class="mb-3">
        <label for="roles" class="form-label">Rol</label>
        <select name="roles[]" id="roles" multiple="multiple" class="form-control" tabindex="5">
            @foreach($roles as $id => $role)
                <option value="{{ $id }}"{{ in_array($id, old('roles', $usuario->roles->pluck('id')->toArray())) ? ' selected' : '' }} >
                    {{ $role }}
                </option>
            @endforeach
        </select>
        @error('roles')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    {{-- <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" value="{{$usuario->password}}" tabindex="6" required>
    </div> --}}
    <a style="margin-left: 880px;"  href="/usuarios" class="btn btn-secondary "  tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button> 
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop