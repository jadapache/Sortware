@extends('adminlte::page')
@section('title', 'Sortware | Inicio')

@section('content_header')
    <h2>Reporte General</h2>

@stop

@section('content')

<script>
    
    var labelDemanda = [<?php echo $labelDemanda; ?>];
    var datosDemanda = [<?php echo $datosDemanda; ?>];
    var labelDemanda2 = [<?php echo $labelDemanda2; ?>];
    var datosDemanda3 = [<?php echo $datosDemanda3; ?>];
    var labelDemanda3 = [<?php echo $labelDemanda3; ?>];
    var datosDemanda4 = [<?php echo $datosDemanda4; ?>];

  
</script>


    
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="">



  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/adminlte/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}


    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-4">
            <!-- small box -->
            <div class="small-box bg-success" >
              <div class="inner">
              <label for="" hidden>{{$ventas=0}}</label>
              @foreach ($ventas_por_producto as $venta)
              <?php $ventas=$venta->unidades+$ventas; ?>
              @endforeach
              <h3><?php echo $ventas; ?></h3>

              <p>N° productos vendidos en los ultimos 7 dias</p>
  
              </div>
              <div class="icon">
              <i class="fas fa-calendar-week"></i>
              </div>
            </div>
          </div>
        
          <!-- ./col -->
          <div class="col-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <label for="" hidden>{{$ventas=0}}</label>
              @foreach ($ventas_por_mes as $venta)
              <?php $ventas=$venta->unidades+$ventas; ?>
              @endforeach
              <h3><?php echo $ventas; ?></h3>

              <p>N° productos vendidos en este mes</p>
  
              </div>
              <div class="icon">
              <i class="far fa-calendar-alt"></i>
            </div>
          </div>
          </div>

          <div class="col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <label for="" hidden>{{$cont=0}}</label>
              @foreach ($results2 as $result)
              <label for="" hidden>{{$cont=$cont+1}}</label>
              @endforeach
              <h3><?php echo $cont = $cont; ?></h3>
              <p>Cantidad de productos en inventario</p>
  
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
            </div>
          </div>
          </div>
        </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" id="card">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Demanda general en el sistema
                </h3>
            
  
                <div class="dropdown show">
                  <a class="btn btn-primary dropdown-toggle ml-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cambiar escala de tiempo
                </a>
                
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <div class="row ">
      <div class="col">
        <ul class="nav flex-column">
                <li class="nav-item" >
                  <a class="dropdown-item active" href="#revenue-chart" value="alta" data-toggle="tab">Demanda en la última semana</a>
                </li>
                
              <li class="nav-item">
              <a class="dropdown-item" href="#sales-chart-canvas"value="baja" data-toggle="tab">Demanda en este mes</a>
            </li>
            
            <li class="nav-item" style="margin-right: 0px">
              <a class="dropdown-item" href="#sales-chart-canvas3" data-toggle="tab">Demanda en el mes pasado</a>
            </li>

          </ul>
        </div>
      <div class="col">
        <ul class="nav flex-column">

        <a id="download"
                download="Demandasemana.jpg" 
                href=""
                class="btn btn-dark float-right bg-flat-color-1"
                title="Descargar Gráfico 1" >
                <i class="fa fa-download"></i>
                </a>

                <a id="download2"
                download="Demandames.jpg" 
                href=""
                class="btn btn-dark float-right bg-flat-color-1 mt-2"
                title="Descargar Gráfico 2" >

                <i class="fa fa-download"></i>
                
              </a>

              <a id="download3"
                download="Demandamespasado.jpg" 
                href=""
                class="btn btn-dark float-right bg-flat-color-1 mt-2"
                title="Descargar Gráfico 3" >

                <i class="fa fa-download"></i>
                
              </a>

              </ul>
        </div>
    </div>
    <div class="row ">

    </div>

    
  </div>
</div>


              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                   
                  <div class="chart tab-pane " id="sales-chart-canvas"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas2" height="300" style="height: 300px;"></canvas>
                   </div>

                   <div class="chart tab-pane " id="sales-chart-canvas3"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas3" height="300" style="height: 300px;"></canvas>
                   </div>
                 
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
         
          </section>
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->

          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">
                    <i class="fas fa-clipboard-list mr-1" style="font-size: 22px"></i>
                    Ver reportes y predicciones por producto</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="productos" class="table table-hover m-0">
                    <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Seleccionar producto </th>
                    </tr>
                    </thead>
                    <tbody style="overflow-y: auto;">
                    @foreach ($productos as $producto)
                    <tr>
                      <td>@if ($producto->photo_path==null)
                            <img style="width:50px; height:50px; border-radius:150px; margin-right:10px;" src="vendor/adminlte/dist/img/img_producto.jpg"> 
                            {{ $producto->nombreP}}
                          @else
                            <div>
                              <img style="width:50px; height:50px; border-radius:150px; margin-right:10px;" src="{{asset("storage/$producto->photo_path")}}"> 
                            {{ $producto->nombreP}}
                            </div>
                          @endif
                      </td>

                      <td>{{$producto->acciones}} 
                
                
                
                <form action="{{route('productos.destroy', $producto->id)}}"  method="POST">
                    <a href="/productos/{{$producto->id}}/prediccionProducto"  class="fas fa-expand-arrows-alt" style="color: dodgerblue; font-size: 20px; margin-top: 15px; margin-left: 70px"></a> 
                
                </form>

                
            </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
    </section>

  


<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/adminlte/js/pages/dashboard.js"></script>



</body>

</html>

        @stop


    
    @section('js')
    <!-- jQuery -->

   

    <script>
  document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("revenue-chart-canvas").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>
    <script>
  document.getElementById("download2").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("revenue-chart-canvas2").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download2");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>

  <script>
  document.getElementById("download3").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("revenue-chart-canvas3").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download3");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>

    <script src="js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    


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

        "bFilter":        true,
        "bInfo":          false,
        "scrollY":        "280px",
        "scrollCollapse": true,
        "paging":         false,
        
        "language": {
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
}
    });

   
    
} );

</script>

    @stop




    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop




{{-- {{$x=array()}}
{{$y=array()}}
{{$dia=1}} --}}



{{-- @for($i = 0; $i <= sizeof($results3)-1; $i++) 
  {{$labelVentas[$i] = var_export($results3[$i]->created_at).","}}
@endfor --}}
{{-- <script src='//unpkg.com/brain.js'></script> --}}


  {{-- <h1>Resultado</h1>
	<div id='salida'>
		
	</div> --}}

	{{-- <script>

    const rawData = [{"fecha":"01/2017","unidades":5302,"precio":1},{"fecha":"02/2017","unidades":4432,"precio":1},
    {"fecha":"03/2017","unidades":5123,"precio":1},{"fecha":"04/2017","unidades":4974,"precio":1},{"fecha":"05/2017","unidades":5432,"precio":1},
    {"fecha":"06/2017","unidades":5657,"precio":1},{"fecha":"07/2017","unidades":7252,"precio":1},{"fecha":"08/2017","unidades":8216,"precio":1},
    {"fecha":"09/2017","unidades":6019,"precio":1},{"fecha":"10/2017","unidades":5612,"precio":1},{"fecha":"11/2017","unidades":5020,"precio":1},
    {"fecha":"12/2017","unidades":5330,"precio":1},{"fecha":"01/2018","unidades":5236,"precio":1},{"fecha":"02/2018","unidades":4575,"precio":1},
    {"fecha":"03/2018","unidades":4546,"precio":1},{"fecha":"04/2018","unidades":4836,"precio":1}]

    console.log(rawData);
    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / 4432,
        precio: step.precio / 1

      };
    }

    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * 4432,
        precio: step.precio * 1

      };
    }

    // console.log(scaleUp(scaleDown(rawData[0])));

    const scaledData = rawData.map(scaleDown);

    const trainingData = [
      scaledData.slice(0, 12),
    ];
    // console.log(trainingData);

		/* Red */
		const net = new brain.recurrent.LSTMTimeStep({
      inputSize: 2,
      hiddenLayers: [4, 3, 2],
      outputSize: 2
    });

    // var data = <?php echo json_encode($ventas_por_meses2);?>;
    
	
		/* Entrenamiento */
    net.train(trainingData, { 
      learningRate: 0.005, 
      errorThresh: 0.02, 
      log: (stats) => console.log(stats) 
    });
     
    
		// net.train( [
    //   [1,20,5302], [2,20,4432], [3,20,5123], [4,20,4974], [5,20,5432],
    //   [6,20,5657], [7,20,7252], [8,20,8216], [9,20,6019], [10,20,5612],
    //   [11,20,5020], [12,20,5330],
    //   [1,21,5236], 
    //   [2,21,4575]


		// 	 ]);

    /* Predicción */
		var result=scaleUp(net.run(trainingData[0]));



		/* Predicción */
		// var result=net.run([3,21]);

//     trainingData.forEach(function(elemento, indice, array) {
//       for (let i = 0; i < trainingData.length; i++) {
//         document.getElementById( "salida" ).innerHTML=Object.values(scaledData);
        
//       }

//     console.log(elemento, indice);
// })
        document.getElementById( "salida" ).innerHTML=Object.values(result);

        // document.getElementById( "salida" ).innerHTML=Object.values(scaledData[10]);
        
        // document.getElementById( "salida" ).innerHTML=Object.values(scaleUp(scaleDown(rawData[0])));

	</script> --}}
