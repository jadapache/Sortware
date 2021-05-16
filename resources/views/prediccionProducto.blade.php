@extends('adminlte::page')

@section('title', 'Sortware | Predicción Producto')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Reportes y predicción en {{$producto->nombreP}}</h2>
@stop


@section('content')
{{-- <div class="mb-3">
    <label for="nombreP" class="form-label">{{$producto->nombreP}}</label>
</div> --}}


  
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info" >
            <div class="inner">
            
            <h3>{{$producto->unidades}}</h3>
            <p>Cantidad de unidades en inventario</p>

            </div>
            <div class="icon">
            <i class="fas fa-pallet"></i>
            </div>
          </div>
        </div>
      
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
            
            <h3><?php echo $unidadesUltimoMes?></h3>
            <p>Unidades vendidas en el último mes</p>

            </div>
            <div class="icon">
            <i class="fas fa-cart-arrow-down"></i>
          </div>
        </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
            
            <h3><div id='salida'></div></h3>

            <p>Unidades estimadas para el próximo mes</p>

            </div>
            <div class="icon">
            <i class="far fa-chart-bar"></i>
          </div>
        </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
            
              <h3><div id='result'></div></h3>
              <p>Cantidad óptima de inventario para el próximo mes</p>

            </div>
            <div class="icon">
            <i class="fas fa-chart-pie"></i>
          </div>
        </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>





  <section class="col-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          Unidades vendidas por mes
        </h3>
        <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
            <li class="nav-item" style="margin-right: 0px">
              <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Gráfico 1</a>
            </li>
            <li class="nav-item" style="margin-right: 20px">
            <a id="download"
                download="ChartImage.jpg" 
                href=""
                class="btn btn-light float-right bg-flat-color-1"
                title="Descargar Gráfico 1">

                <!-- Download Icon -->
                <i class="fa fa-download"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sales-chart-canvas" data-toggle="tab">Gráfico 2</a>
            </li>
            <li class="nav-item">
            <a id="download2"
                download="ChartImage.jpg" 
                href=""
                class="btn btn-light float-right bg-flat-color-1"
                title="Descargar Gráfico 2">

                <!-- Download Icon -->
                <i class="fa fa-download"></i>
              </a>
            </li>
          </ul>
        </div>
        
      </div><!-- /.card-header -->
      <div class="card-body">
          
        
        <div class="tab-content p-0">
          
          <!-- Morris chart - Sales -->
          <div class="chart tab-pane active" id="revenue-chart"
          
               style="position: relative; height: 300px;">
              <canvas id="revenue-chart-canvas-products" height="500" style="height: 500px;"></canvas>
              
           </div>
           


           <div class="chart tab-pane" id="sales-chart-canvas"
                
               style="position: relative; height: 300px;">
              <canvas id="revenue-chart-canvas-products-bar" height="300" style="height: 300px;"></canvas>
            </div>
            
        </div>
      </div><!-- /.card-body -->
      
      
    </div>
    <!-- /.card -->
 
  </section>








@stop


@section('js')

<script src='//unpkg.com/brain.js'></script>
<script>
    var data = <?php echo json_encode($trainingData);?>;
    

    const rawData = [{"fecha":"01/2017","unidades":5302,"precio":1},{"fecha":"02/2017","unidades":4432,"precio":1},
    {"fecha":"03/2017","unidades":5123,"precio":1},{"fecha":"04/2017","unidades":4974,"precio":1},{"fecha":"05/2017","unidades":5432,"precio":1},
    {"fecha":"06/2017","unidades":5657,"precio":1},{"fecha":"07/2017","unidades":7252,"precio":1},{"fecha":"08/2017","unidades":8216,"precio":1},
    {"fecha":"09/2017","unidades":6019,"precio":1},{"fecha":"10/2017","unidades":5612,"precio":1},{"fecha":"11/2017","unidades":5020,"precio":1},
    {"fecha":"12/2017","unidades":5330,"precio":1},{"fecha":"01/2018","unidades":5236,"precio":1},{"fecha":"02/2018","unidades":4575,"precio":1},
    {"fecha":"03/2018","unidades":4546,"precio":1},{"fecha":"04/2018","unidades":4836,"precio":1}]

    // console.log(rawData);
    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / {{$highest}},
        precio: step.precio / 1

      };
    }
    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * {{$highest}},
        precio: step.precio * 1

      };
    }
    // console.log(scaleUp(scaleDown(rawData[0])));

    const scaledData = data.map(scaleDown);
    
    const trainingData = [
      scaledData.slice(0, {{$date}}),
    ];
    // console.log(trainingData);

		/* Red */
		const net = new brain.recurrent.LSTMTimeStep({
      inputSize: 2,
      hiddenLayers: [4, 3, 2],
      outputSize: 2
    });

    
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

    delete result.precio;
    result=Math.round(result.unidades * 100) / 100;

    document.getElementById( "salida" ).innerHTML=result;
    // document.getElementById( "salida" ).innerHTML=Object.values(scaledData[10]);
    // document.getElementById( "salida" ).innerHTML=Object.values(scaleUp(scaleDown(rawData[0])));


    var costoOrden = <?php echo $costoOrden;?>;
    var precio = <?php echo $precio;?>;
    var cantidadOptima=Math.sqrt((2*result*costoOrden)/(precio*0.0283/*0.000694*/));
    cantidadOptima=Math.round(cantidadOptima * 100) / 100;

    document.getElementById( "result" ).innerHTML=cantidadOptima;

     // optimalQuanty[i] = Math.sqrt((2 * nnResults[i][0].soldStock * ProductList[i].ProductCost) / (ProductList[i].ProductPrice * /*0.02080*/0.000694));
    // optimalQuanty[i] = Math.sqrt((2 * DEMANDA *COSTO DE ORDENAR)/COSTO DE ALAMCENAR);
      
	</script>


   


<script>
    
    var labelVentas = [<?php echo $labelVentas; ?>, 'Siguiente Mes'];
    var datosVentas = [<?php echo $datosVentas; ?>];
    var prediccion = [<?php echo $datosVentas; ?>, result];

    var labelVentasbar = [<?php echo $labelVentas; ?>, 'Siguiente Mes'];
    var datosVentasbar = [<?php echo $datosVentas; ?>, result];
    var conteoDatos = <?php echo $conteoVentas; ?>;
  
</script>

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
<script src="/adminlte/plugins/sparklines/sparkline.js"></script>
<script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/adminlte/js/adminlte.js"></script>
<script src="/adminlte/js/demo.js"></script>
<script src="/adminlte/js/pages/dashboardproducts.js"></script>

<script>
  document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("revenue-chart-canvas-products").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>
    <script>
  document.getElementById("download2").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("revenue-chart-canvas-products-bar").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download2");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>

@stop



