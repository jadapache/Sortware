@extends('adminlte::page')

@section('title', 'Sortware | Inicio')

@section('content_header')
    <h2>Listado de productos</h2>
@stop

@section('content')
<a href="/productos/create" class="btn btn-primary  text-white font-bold py-2 px-4 rounded mb-3"> Crear</a>

<div class="card">
    <div class="card-body">
            <table id="productos" class="table table-hover shadow-lg">
                {{-- <table id="productos" class="table table-striped table-bordered shadow-lg mt-4" > --}}


            <thead class="bg-dark text-white" >
                <tr>
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col" width="15">Código</th>
                    <th scope="col"> Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" >Unidades</th>
                    <th scope="col">Precio</th>
                    <th scope="col" style="text-align: center">Estado</th>
                    <th scope="col" style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($productos as $producto)
        
            {{-- @if ($producto->estado == 1? $producto->estado="Activo":$producto->estado="Inactivo")
            @endif  --}}
        <tr>
            {{-- <td>{{$producto->id}}</td> --}}
            <td>{{$producto->codigo}}</td>
            <td>
            @if ($producto->photo_path==null)
                <img style="width:50px; height:50px; border-radius:150px; margin-right:10px;" src="vendor/adminlte/dist/img/img_producto.jpg"> 
                {{ $producto->nombreP}}
            @else
            <div>
                <img style="width:50px; height:50px; border-radius:150px; margin-right:10px;" src="{{asset("storage/$producto->photo_path")}}"> 
                  {{ $producto->nombreP}}
            </div>
            @endif
            </td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->unidades}}</td>
            <td>{{$producto->precio}}</td>
            <td style="text-align: center">
                @if($producto->estado == 1)
                <span style="font-size:14px" class="badge badge-success right">Activo</span>
                <a href="/productos/{{$producto->id}}/estado/0" class="fas fa-exchange-alt"></a>

                {{-- <a href="/productos/{{$producto->id}}/estado/0" class="btn btn-light "><i class="fas fa-exchange-alt"></i></a> --}}
            @else
                <span  class="right badge badge-danger">Inactivo</span>
                <a href="/productos/{{$producto->id}}/estado/1" class="fas fa-exchange-alt"></a>
            @endif</td>
            
           
            <td style="text-align: center">{{$producto->acciones}} 
                
                <a href="#show-{{$producto->id}}" data-toggle="modal" title="{{ $producto->nombreP }}" class="btn btn-secondary fas fa-eye"></a>
                <a href="/productos/{{$producto->id}}/edit"  class="btn btn-info fas fa-edit"></a> 

            
                <form action="{{route('productos.destroy', $producto->id)}}"  class="d-inline formulario-eliminar" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger fas fa-trash-alt" title="Eliminar registro"></button>
                
                </form>

                
            </td>
        </tr>

        @endforeach
        @include('producto/show')

        </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
    <link rel="stylesheet" type="text/css" href="/css/estilos.css" media="screen" />
@stop

@section('js')
@include('sweetalert::alert');
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> 

<script>
$(document).ready(function() {
    $('#productos').DataTable({
            "dom": Bfrtip,
            "buttons": [
                'pageLength',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
        
        "lengthMenu": [[5,10,50,-1], [5,10,50,"Todos"]],
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                "fillHorizontal": "Rellenar celdas horizontalmente",
                "fillVertical": "Rellenar celdas verticalmentemente"
            },
            "decimal": ",",
            "searchBuilder": {
            "add": "Añadir condición",
            "button": {
                "0": "Constructor de búsqueda",
                "_": "Constructor de búsqueda (%d)"
            },
            "clearAll": "Borrar todo",
            "condition": "Condición",
            "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "not": "No",
                "notBetween": "No entre",
                "notEmpty": "No Vacio"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "not": "No",
                "notBetween": "No entre",
                "notEmpty": "No vacío"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "not": "No",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con"
            }
            },
            "data": "Data",
            "deleteTitle": "Eliminar regla de filtrado",
            "leftTitle": "Criterios anulados",
            "logicAnd": "Y",
            "logicOr": "O",
            "rightTitle": "Criterios de sangría",
            "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d"
    },
    "select": {
        "1": "%d fila seleccionada",
        "_": "%d filas seleccionadas",
        "cells": {
            "1": "1 celda seleccionada",
            "_": "$d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas"
    }
}
    });
} );
</script>
@stop