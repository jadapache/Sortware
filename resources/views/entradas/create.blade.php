@extends('adminlte::page')

@section('title', 'Sortware | Nuevo Producto')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Registrar Entradas</h2>
@stop

@section('content')


<form action="{{ route('entradas.store') }}" method="POST">
    @csrf

    
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <select name="producto_id" id="producto_id"  placeholder="Seleccione un producto" class="form-control" >
             @foreach($productos as $producto)
                {{-- @foreach ($producto -> salidas as $salida) --}}
                @if ($producto->estado == 1)

             <option value="">Seleccione un producto</option>
                <option value="{{ $producto -> id }}" {{ in_array($producto, old('productos', [])) ? ' selected' : '' }}>{{ $producto -> codigo }}, {{ $producto -> nombreP }}, Stock: {{ $producto -> unidades}}</option>
                @endif
                @endforeach 
            {{-- @endforeach --}}
        </select>
       
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ingrese el numero de unidades a agregar</label>
        <input  id="unidadesentr" value="{{old('unidadesentr')}}" name="unidadesentr" type="number" class="form-control" tabindex="3"required >
    </div>
     
    
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label> (opcional)
        <textarea  id="observaciones" value="{{old('observaciones')}}" name="observaciones" type="text" class="form-control" placeholder="Escribe tus observaciones..."></textarea>
    </div>
    

    
    <a href="/entradas" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>   
    @include('sweetalert::alert')

</form>
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/styles.css">

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<script>
      $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
          
      });
  });
    </script>
    

@stop