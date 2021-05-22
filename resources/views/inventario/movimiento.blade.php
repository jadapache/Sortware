@extends('adminlte::page')

@section('title', 'Sortware | Inicio')

@section('content_header')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">Movimientos</h2>
@stop

@section('content')
{{-- <a href="/productos/create" class="btn btn-primary  text-white font-bold py-2 px-4 rounded mb-3"> Crear</a> --}}


    <table id="productos" class=" table  round-table shadow-lg mt-4">
        {{-- <table id="productos" class="table table-striped table-bordered shadow-lg mt-4" > --}}


    <thead class="bg-dark text-white" >
        <tr>
            {{-- <th scope="col">ID</th> --}}
            
            <th scope="col" width="50">Producto</th>
            <th scope="col" width="50">Unidades</th>
            <th scope="col" width="50">Precio</th>
            <th scope="col" width="50">Mov.</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        
        <tr>
            {{-- <td>{{$producto->id}}</td> --}}
            <td>{{$producto->nombreP}}</td>
            <td>{{$producto->unidades}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->acciones}}

                
                <button type="submit" class="btn btn-primary pull-right" data-toggle="modal"  data-target="/productos/{{$producto->id}}/edit"></button>
                <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
                    Nueva tarea
                </a>
                @include('create')
            </td>
        </tr>

        @endforeach
    </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> 

<script>
$(document).ready(function() {
    $('#productos').DataTable({
        "columnDefs": [
    { "width": "5%", "targets": 0 }
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
/* 
"language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Registro no encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ entradas totales)"
            
        }
        "lengthMenu": [[5,10,50,-1], [5,10,50,"Todos"]]
 */
</script>
@stop