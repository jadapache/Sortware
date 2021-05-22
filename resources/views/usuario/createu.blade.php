@extends('adminlte::page')

@section('title', 'Sortware | Nuevo Usuario')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Usuario</h2>
@stop

@section('content')
<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control"  tabindex="4"required>
    </div>
    {{-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="roles" class="form-label">Roles</label>
                            <select name="roles[]" id="roles" class="form-control" multiple="multiple">
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}"{{ in_array($id, old('roles', [])) ? ' selected' : '' }}>{{ $role }}</option>
                                @endforeach
                            </select>
                            @error('roles')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> --}}
    
    <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>    
</form>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
@stop

@section('js')
   
@stop