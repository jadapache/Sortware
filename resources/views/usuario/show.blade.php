@foreach ($usuarios as $usuario)
<div class="modal fade bs-example-modal-lg" id="show-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(52, 58, 64)">
                <h4 class="modal-title col-11 text-center" style="color: white"  id="myModalLabel"> Información de {{$usuario->name}}</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: white">×</span>
                </button>
                
            </div>
            <div class="container">
                <article class="content">
                    @if ($usuario->profile_photo_path==null)
                    <img style="width:200px; height:200px;  margin-right:10px;" class="img-thumbnail" src="vendor/adminlte/dist/img/img_usuario.png"> 
                    @else
                    <img style="width:200px; height:200px;  margin-right:10px;" class="img-thumbnail" src="{{asset("storage/$usuario->profile_photo_path")}}"> 
                    @endif
                        
                </article>
                    
                    <aside class="side">
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            {{$usuario->name}}
                        </div>
                        <div class="mb-3">
                            <label for="nombreP" class="form-label">Rol:</label>
                            @foreach ($usuario->roles as $role)
                            <span class="right badge badge-success" style="font-size: 14px">{{ $role->title }}</span>
                            @endforeach
                        </div>
                        
                        <div class="mb-3">
                            <label for="unidades" class="form-label">Correo electrónico:</label>
                            {{$usuario->email}}
                        </div>
                        
                        <div class="mb-3">
                            <label for="precio" class="form-label">Fecha de creación:</label>
                            {{$usuario->created_at}}
                        </div>
                        
                      </aside>
            </div>
            
        </div>
    </div>
</div>
@endforeach
@section('css')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
    <link rel="stylesheet" type="text/css" href="/css/estilos.css" media="screen" />
@stop


@section('css')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
@stop

@section('js')
@include('sweetalert::alert')

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> 
<script>
$(document).ready(function() {
    $('#usuarios').DataTable({
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