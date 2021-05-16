@extends('adminlte::page')

@section('title', 'Sortware | Editar Producto')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Producto</h2>
@stop

@section('content')

<form action="/productos/{{$producto->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$producto->codigo}}" tabindex="1" required>
    </div>

    <div class="mb-3">
        <label for="nombreP" class="form-label">Nombre</label>
        <input id="nombreP" name="nombreP" type="text" class="form-control" value="{{$producto->nombreP}}" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}" tabindex="3" required> 
    </div>
    <div class="mb-3">
        <label for="unidades" class="form-label">Unidades</label>
        <input id="unidades" name="unidades" readonly="readonly" type="number" stop="any" step="1" class="form-control" value="{{$producto->unidades}}" tabindex="4" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" stop="any" step="1" class="form-control" value="{{$producto->precio}}" tabindex="5" required>
    </div>
    <div class="mb-3">
        <label for="costo" class="form-label">Costo de ordenar</label>
        <input id="costo" name="costo" type="number" stop="any" step="1" class="form-control" value="{{$producto->costo}}" tabindex="5" required>
    </div>
    <div class="mb-3">
        <label for="photo_path" class="form-label">Actualiza la imagen:</label>
        <input type="file" id="photo_path" name="photo_path" value="{{$producto->photo_path}}">       
        <img id="imagenPrevisualizacion" src="{{asset("storage/$producto->photo_path")}}" width="100" height="100">
        <script src="script.js"></script>

    </div>
    
    <a style="margin-left: 850px;" href="/productos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    // Obtener referencia al input y a la imagen
    
    const $photo_path = document.querySelector("#photo_path"),
      $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");
    
    // Escuchar cuando cambie
    $photo_path.addEventListener("change", () => {
      // Los archivos seleccionados, pueden ser muchos o uno
      const archivos = $photo_path.files;
      // Si no hay archivos salimos de la función y quitamos la imagen
      if (!archivos || !archivos.length) {
        $imagenPrevisualizacion.src = "";
        return;
      }
      // Ahora tomamos el primer archivo, el cual vamos a previsualizar
      const primerArchivo = archivos[0];
      // Lo convertimos a un objeto de tipo objectURL
      const objectURL = URL.createObjectURL(primerArchivo);
      // Y a la fuente de la imagen le ponemos el objectURL
      $imagenPrevisualizacion.src = objectURL;
    });
    </script>
@stop