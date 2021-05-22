@extends('adminlte::page')

@section('title', 'Sortware | Inicio')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Salidas de inventario</h2>
@stop

@section('content')
<a href="/salidas/create" class="btn btn-primary  text-white font-bold py-2 px-4 rounded mb-3"> Registrar Salidas</a>

    <div class="card">
        <div class="card-body">

    <table id="salidas" class="table table-hover shadow-lg">
        {{-- <table id="productos" class="table table-striped table-bordered shadow-lg mt-4" > --}}


    <thead class="bg-dark text-white" >
        <tr>
            {{-- <th scope="col">ID</th> --}}
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Stock</th>
            <th scope="col" >Salidas</th>
            <th style="text-align: center" scope="col">Motivo/Tipo Salida</th>
            <th scope="col">Fecha creación</th>
            
            <th style="text-align: center" scope="col">Acciones</th>
        </tr>
    </thead>
    @include('sweetalert::alert')

    <tbody>
      @foreach ($productos as $producto)
        @foreach ($producto -> salidas as $salida)
        
 {{-- @if ($producto->unidades >= $salida->unidades? $producto->unidades=($producto->unidades)-($salida->unidades):'Existen muy pocas unidades en stock')
            @endif   --}}
        <tr>
            <td>{{$salida->id}}</td>
            <td>{{$producto->nombreP}}</td>
            <td>{{$producto->unidades}}</td>
            <td>{{$salida->unidadessal}}</td>
            <td style="text-align: center">
                @foreach ($salida->tipo_salidas as $tipo)
                    {{-- <span style=" border-radius: 15px; text-color: rgb(141, 71, 31); background-color: rgb(169, 204, 227); text-align: center;" class="px-2"> --}}
                    <span style="font-size:14px" class="badge badge-info right">{{ $tipo->title }}</span>
                @endforeach
            </td>
            <td>{{$salida->created_at}}</td>
   
            
            <td style="text-align: center">{{$salida->acciones}}

                <a href="#show-{{$salida->id}}" data-toggle="modal" title="Ver # {{ $salida->id }}" class="btn btn-secondary fas fa-eye"></a>


                <form action="{{route('salidas.destroy', $salida->id)}}"  class="d-inline formulario-eliminar" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger fas fa-trash-alt" title="Eliminar salida" ></button>
                
                </form>

            </td>
        </tr>

        @endforeach
        @endforeach
        @include('salidas/show')

    </tbody>
    </table>
     </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
@stop

@section('js')
@include('sweetalert::alert');
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> 
<script>
$(document).ready(function() {
    $('#salidas').DataTable({
        "order": [[ 0, "desc" ]],
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
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colección",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                    "1": "Copiada 1 fila al portapapeles",
                    "_": "Copiadas %d fila al portapapeles"
                },
                "copyTitle": "Copiar al portapapeles",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todas las filas",
                    "1": "Mostrar 1 fila",
                    "_": "Mostrar %d filas"
                },
                "pdf": "PDF",
                "print": "Imprimir"
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