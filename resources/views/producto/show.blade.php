@foreach($productos as $producto)
<div class="modal fade bs-example-modal-lg" id="show-{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(52, 58, 64)">
                <h4 class="modal-title col-11 text-center" style="color: white" id="myModalLabel"> Información de {{$producto->nombreP}}</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: white">×</span>
                </button>
                
            </div>
            <div class="container">
                <article class="content">
                    @if ($producto->photo_path==null)
                    <img style="width:200px; height:200px; margin-top:100px; margin-right:10px;" class="img-thumbnail" src="vendor/adminlte/dist/img/img_producto.jpg"> 
                    @else
                    <img style="width:200px; height:200px;   margin-top:100px; margin-right:10px;" class="img-thumbnail" src="{{asset("storage/$producto->photo_path")}}"> 
                    @endif
                </article>
                    
                    <aside class="side">
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código:</label>
                            {{$producto->codigo}}
                        </div>
                        <div class="mb-3">
                            <label for="nombreP" class="form-label">Nombre:</label>
                            {{$producto->nombreP}}
                        </div>
                        <div class="mb-3">
                            <label for="nombreP" class="form-label">Descripción:</label>
                            {{$producto->descripcion}} 
                        </div>
                        <div class="mb-3">
                            <label for="unidades" class="form-label">Unidades Disponibles:</label>
                            {{$producto->unidades}}
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            {{$producto->precio}}
                        </div>
                        @if ($producto->estado == 1? $producto->estado="Activo":$producto->estado="Inactivo")
                        <div class="mb-3">
                            <label for="precio" class="form-label">Disponibilidad:</label>
                            @if ($producto->estado == 'Activo')
                            <span style="font-size:14px" class="badge badge-success right">{{$producto->estado}}</span>
                            @else
                            <span class="right badge badge-danger">{{$producto->estado}}</span>
                            @endif
                        </div>
                        @endif
                        <div class="mb-3">
                            <label for="precio" class="form-label">Fecha de creación:</label>
                            {{$producto->created_at}}
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Ultima actualización:</label>
                            {{$producto->updated_at}}
                        </div>
                      </aside>
            </div>
            
        </div>
    </div>
</div>
@endforeach
@section('css')

<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen" />

<link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel=stylesheet>
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css"/>

{{-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet" />
<link href= "https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel=stylesheet> --}}

@stop


@section('js')
@include('sweetalert::alert')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Deseas eliminar este producto?',
  text: "No podrá recuperar el producto una vez efectuada la acción",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Cancelar',
  confirmButtonText: 'Sí, eliminar'
}).then((result) => {
  if (result.isConfirmed) {
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )
    this.submit();
  }
})
    });
    </script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> 

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>


<script>
$(document).ready(function() {
    $('#productos').DataTable({
        responsive:"true",
        dom: 'Bfrt <"col-md-4  inline"l>  <"col-md-4  inline"i> <"col-md-4  inline"p>',
        buttons: [
            {
            extend: 'copy',
            text: '<i class="fas fa-copy"></i>',
            titleAttr: 'Copiar',
            className: ' btn-group-vertical btn btn-dark',
        },    
        {
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"></i>',
            titleAttr: 'Exportar a excel',
            className: 'button-excel btn-group-vertical btn btn-success',
            filename: 'Export_File_excel',
        },
        {
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr: 'Exportar a PDF',
            className: 'button-pdf btn-group-vertical btn btn-danger',
            filename: 'Export_File_PDF',
        },
        {
            extend: 'print',
            text: '<i class="fa fa-print"></i>',
            titleAttr: 'Imprimir',
            className: 'button-print btn-group-vertical btn btn-info'
        },
        {
            extend: 'csv',
            text: '<i class="fas fa-file-csv"></i>',
            titleAttr: 'Exportar a CSV',
            className: 'button-csv btn-group-vertical btn btn-warning',
            filename: 'Export_File_csv'

        }
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
        "hours": "Horas",
        "class": "datetime"
    }
},

    
    
    });
} );

</script>
@stop