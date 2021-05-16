@extends('adminlte::page')

@section('title', 'Sortware | Nuevo Producto')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Producto</h2>
@stop

@section('content')

<form action="/productos" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombreP" name="nombreP" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sube una imagen:</label>
        <input type="file" id="photo_path" name="photo_path">
        <img id="imagenPrevisualizacion" width="100" height="100">
    <script src="script.js"></script>
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Unidades</label>
        <input id="unidades" name="unidades" type="number" stop="any" step="1" value="0.00" class="form-control" tabindex="4" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" stop="any" value="0.00" class="form-control" tabindex="5" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Costo de ordenar</label>
        <input id="costo" name="costo" type="number" stop="any" value="0.00" class="form-control" tabindex="6" required>
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button> 
    @include('sweetalert::alert')
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