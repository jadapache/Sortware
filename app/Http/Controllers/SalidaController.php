<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salida;
use App\Models\Producto;
use App\Models\User;
use App\Models\TipoSalida as ModelsTipoSalida;
use Illuminate\Support\Facades\DB;
use App\Models\TipoSalida;

use Symfony\Component\HttpFoundation\Response;
use RealRashid\SweetAlert\Facades\Alert;



class SalidaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productos = Producto::with('salidas')->get();
        $tipo_salidas = Salida::with('tipo_salidas')->get();

        //Alert::warning('Revisar salida', 'La cantidad a sacar supera a la cantidad disponible');
        return view('salidas.indexs', compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$productos = Producto::with('salidas')->get();
        $salidas = new Salida();
        
        $productos = Producto::all();
        $tipo_salidas = TipoSalida::pluck('title', 'id');

        //abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //Alert::warning('Revisar salida', 'La cantidad a sacar supera a la cantidad disponible');
        //toast('Revisar salida', 'La cantidad a sacar supera a la cantidad disponible');
        return view('salidas.create', compact('productos'))->with('tipo_salidas', $tipo_salidas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $salidas = new Salida();
        $productos = Producto::all();
        //$salidas -> id = $request -> get('id');
        $salidas -> producto_id = $request -> get('producto_id');
        $salidas -> unidadessal = $request -> get('unidadessal');
        $salidas -> created_at = $request -> get('created_at');

        //$productos -> unidades = $request -> get('unidades');
        //$salidas -> producto()->is($request->input('producto_id', []));
        if ($salidas -> observaciones = $request -> get('observaciones') != null){
            $salidas -> observaciones = $request -> get('observaciones');
        }else{
            $salidas -> observaciones = "Ninguna";
        }
        


        $unidadessal = $_POST['unidadessal'];
        $producto_id = $_POST['producto_id'];// codigo del articulo que es el mismo que el de arriba
        $results = DB::select("SELECT unidades FROM productos WHERE id = $producto_id");
        foreach($results as $row){
            $unidades = $row-> unidades;
            if($unidadessal > $unidades) {
                
                //echo "La cantidad es superior a lo que hay en la tienda";
                toast('Revisar Salida. La cantidad a sacar supera a la cantidad disponible','warning');
                return redirect('/salidas/create')->withInput();

            }else{
                if ($unidadessal == 0){
                toast('La cantidad a sacar es 0','warning');
                return redirect('/salidas/create')->withInput();
                }else{
                $sql = "UPDATE productos SET unidades = unidades - $unidadessal WHERE id= $producto_id";
                $productos = DB::select($sql);
                $salidas -> save();
                $salidas -> tipo_salidas()->sync($request->input('tipo_salidas',[]));
                $salidas -> save();
                alert()->success('Registro exitoso','La salida se ha registrado satisfactoriamente');
                return redirect('/salidas');
                }
            }
        }
        

        
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function inicio()
    {
        return view('inicio');
    }

    public function reportesPrediccion()
    {
        $fechasDemanda=[];
        $demandaTotal=[];
        $productos = Producto::all();

        $results = DB::select("SELECT salida_id FROM salida_tipo_salida WHERE tipo_salida_id = 1");
        // $results = DB::select("SELECT salida_id FROM salida_tipo_salida WHERE tipo_salida_id = 1 AND created_at BETWEEN DATE(DATE_SUB(NOW(),INTERVAL 7 DAY)) AND NOw();");
        $results2 = DB::select("SELECT * FROM productos");
        // $results3 = DB::select("SELECT id, created_at FROM salidas, salida_tipo_salida WHERE id=salida_id AND tipo_salida_id = 1 GROUP BY DAY(created_at)" );
        $results3=DB::select("SELECT DATE(salidas.created_at) as created_at,  SUM(precio * salidas.unidadessal) as precio
                              FROM salidas, salida_tipo_salida, productos
                              WHERE  salidas.id=salida_id AND salidas.producto_id=productos.id
                              AND tipo_salida_id = 1 GROUP BY DATE(salidas.created_at)");
        // $ventas_por_mes=DB::select("SELECT MONTH(salidas.created_at) as created_at,  SUM(salidas.unidadessal) as unidades 
        //                         FROM salidas, salida_tipo_salida, productos
        //                         WHERE  salidas.id=salida_id AND salidas.producto_id=productos.id
        //                         AND tipo_salida_id = 1 GROUP BY MONTH(salidas.created_at)");
        $años=DB::select("SELECT YEAR(salidas.created_at) as created_at,  SUM(salidas.unidadessal) as unidades 
                        FROM salidas, salida_tipo_salida, productos
                        WHERE  salidas.id=salida_id AND salidas.producto_id=productos.id
                        AND tipo_salida_id = 1 GROUP BY YEAR(salidas.created_at)");

        $ventas_por_producto=DB::select("SELECT  Date(salidas.`created_at`) as created_at, sum(`unidadessal`) as unidades
                        FROM `salidas`, `salida_tipo_salida`
                        WHERE `salidas`.id=`salida_id` AND `tipo_salida_id` = 1 
                        AND salidas.`created_at` BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() 
                        group by DATE (salidas.created_at)");
        $ventas_por_mes=DB::select("SELECT date(salidas.created_at) as created_at, SUM(salidas.unidadessal) as unidades 
        FROM salidas, salida_tipo_salida, productos
        WHERE  salidas.id=salida_id AND salidas.producto_id=productos.id
        AND tipo_salida_id = 1 and MONTH(salidas.created_at) = MONTH(CURDATE()) and year(salidas.created_at) = year(CURDATE()) GROUP BY date(salidas.created_at)");
    
        $ventas_por_mes_pasado=DB::select("SELECT date(salidas.created_at) as created_at, SUM(salidas.unidadessal) as unidades 
        FROM salidas, salida_tipo_salida, productos
        WHERE  salidas.id=salida_id AND salidas.producto_id=productos.id
        AND tipo_salida_id = 1 and MONTH(salidas.created_at) = MONTH(DATE_ADD(CURDATE(),INTERVAL -1 MONTH)) and year(salidas.created_at) = year(CURDATE()) GROUP BY date(salidas.created_at)");

$fechasDemanda2=[];
$demandaTotal3=[];
$fechasDemanda3=[];
$demandaTotal4=[];

$w =1;
$lengthDemanda = count($ventas_por_mes_pasado);
foreach ($ventas_por_mes_pasado as $fecha){
    if($w === $lengthDemanda){
    $fechasDemanda3[]=rtrim("'".$fecha->created_at."'",",");
    }else{
    $fechasDemanda3[]=rtrim("'".$fecha->created_at."'");
}   
$w++;

}

$e =1;
$lengthDemanda = count($ventas_por_mes_pasado);
foreach ($ventas_por_mes_pasado as $venta_producto){
    if($e === $lengthDemanda){
    $demandaTotal4[]=rtrim("'".$venta_producto->unidades."'",",");
    }else{
    $demandaTotal4[]=rtrim("'".$venta_producto->unidades."'");
}   
$e++;

}


        $l =1;
        $lengthDemanda = count($ventas_por_mes);
        foreach ($ventas_por_mes as $fecha){
            if($l === $lengthDemanda){
            $fechasDemanda2[]=rtrim("'".$fecha->created_at."'",",");
            }else{
            $fechasDemanda2[]=rtrim("'".$fecha->created_at."'");
        }   
        $l++;

    }

    $q =1;
    $lengthDemanda = count($ventas_por_mes);
        foreach ($ventas_por_mes as $venta_producto){
            if($q === $lengthDemanda){
            $demandaTotal3[]=rtrim("'".$venta_producto->unidades."'",",");
            }else{
            $demandaTotal3[]=rtrim("'".$venta_producto->unidades."'");
        }   
        $q++;

    }

        $z =1;
        $lengthDemanda = count($ventas_por_producto);
        foreach ($ventas_por_producto as $fecha){
            if($z === $lengthDemanda){
                $fechasDemanda[]=rtrim("'".$fecha->created_at."'",",");
            }else{
                $fechasDemanda[]=rtrim("'".$fecha->created_at."'");
        }
        $z++;
        }

        $p =1;
        $lengthDemanda = count($ventas_por_producto);
        foreach ($ventas_por_producto as $venta_producto){
            if($p === $lengthDemanda){
            $demandaTotal[]=rtrim("'".$venta_producto->unidades."'",",");
        }else{
            $demandaTotal[]=rtrim("'".$venta_producto->unidades."'");
        }
        $p++;
        }

   

    $labelDemanda = implode(",", $fechasDemanda);
    $datosDemanda = implode(",", $demandaTotal);

    $labelDemanda2 = implode(",", $fechasDemanda2);
    $datosDemanda3 = implode(",", $demandaTotal3);

    $labelDemanda3 = implode(",", $fechasDemanda3);
    $datosDemanda4 = implode(",", $demandaTotal4);

    $ventas_mes = array();
    foreach ($ventas_por_mes as $venta_mes){
        array_push($ventas_mes, $venta_mes->unidades);
    }

    $meses = array();
    foreach ($ventas_por_mes as $venta_mes){
      
        array_push($meses, $venta_mes->created_at);
    }

// var_export($meses);

    $años_array = array();
    foreach ($años as $año){
      
        array_push($años_array, $año->created_at);
    }


$ventas_por_meses = array();
$ventas_por_meses2 = array();

for ($i=0; $i <= count($meses)-1; $i++) { 

    $ventas_por_meses[0] = $meses[$i];
    $ventas_por_meses[1] = $años_array[0];
    $ventas_por_meses[2] = $ventas_mes[$i];
    array_push($ventas_por_meses2, $ventas_por_meses);

    

}


        $x =1;
        $length = count($results3);
        foreach ($results3 as $result3){
            if($x === $length){
            $labelVentas[]=rtrim("'".$result3->created_at."'",",");
        }else{
            $labelVentas[]=rtrim("'".$result3->created_at."'");
        }
    
        $x++;
        }

    
    $array2 = array();
    foreach ($results3 as $result3){
      
        array_push($array2, $result3->precio);
    }
    // echo var_export($array2);

    $separado_por_comas5 = implode(",", $array2);
    // echo $separado_por_comas5;


    $y =1;
    foreach ($results3 as $result3){
        if($y === $length){
            $datosVentas[]=rtrim("'".$result3->precio."'",",");
            $datosVentas2[]=$result3->precio;
        }else{
            $datosVentas[]=rtrim("'".$result3->precio."'");
            $datosVentas2[]=$result3->precio;
        }
        $y++;
    }


        $separado_por_comas = implode(",", $labelVentas);
        $separado_por_comas2 = implode(",", $datosVentas);
        $separado_por_comas3 = implode(",", $datosVentas);

        $x=array();
        $y=array();
        $dia=1;
        for ($i=0; $i <= count($labelVentas)-1; $i++) { 
        array_push($x, $dia);

        $dia++;
        }
// var_export($x);
// var_export($y);


//regresión Lineal:
        // $x = $x;
        // $y = $datosVentas2;
        // $n = count($x);
        // if(count($y)!=$n){
        //     die("Los elementos en x no coinciden con lso elementos en y");
        // }
        // $sumaX = array_sum($x);
        // $sumaY = array_sum($y);

        // $sumaXporX=0;
        // $sumaXporY=0;

        // for ($i=0; $i < $n; $i++) { 
        //     $sumaXporX= $sumaXporX+($x[$i]*$x[$i]);
        //     $sumaXporY= $sumaXporY+($x[$i]*$y[$i]);
        // }
        // $w = (($n * $sumaXporY)-($sumaX * $sumaY)) / (($n * $sumaXporX)-($sumaX*$sumaX));
        // $b = ($sumaY - ($w * $sumaX)) / $n;
        // // echo "w= $w <br> b =$b";

        // $z =1;
        // $datosPrediccion[]="";
        // for ($i=1; $i < count($x)+3; $i++) { 
        //     $venta = $w*($i)+$b;
        //     $datosPrediccion[]="'".$venta."'";
        //     $datosPrediccion2[]=$venta;
            
        // }
        
        // unset($datosPrediccion[0]);
        // // echo (var_export($datosPrediccion));
        // $datosPrediccion_separado_por_comas = implode(",", $datosPrediccion);
        // // echo($datosPrediccion_separado_por_comas);

       
        return view('reportesPrediccion')->with('ventas_por_producto', $ventas_por_producto)
        ->with('datosDemanda', $datosDemanda)->with('labelDemanda', $labelDemanda)
        ->with('productos', $productos)->with('ventas_por_meses2',$ventas_por_meses2)
        ->with('separado_por_comas5',$separado_por_comas5)->with('labelVentas',$labelVentas)
        ->with('separado_por_comas2', $separado_por_comas2)->with('separado_por_comas', $separado_por_comas)
        ->with('results',$results)->with('results2', $results2)->with('results3', $results3)
        ->with('x',$x)->with('y',$y)->with('labelDemanda2', $labelDemanda2)->with('datosDemanda3', $datosDemanda3)
        ->with('labelDemanda3', $labelDemanda3)->with('datosDemanda4', $datosDemanda4)->with('ventas_por_mes', $ventas_por_mes);
        
    }
    

    public function prediccion($id)
    {
        $producto = Producto::find($id);
        $ventas_por_producto=DB::select("SELECT productos.id,  year(salidas.`created_at`) as created_at_year, month(salidas.`created_at`)as created_at_month, sum(`unidadessal`) as unidades 
                                        FROM `salidas`, `salida_tipo_salida`, `productos` 
                                        WHERE `salidas`.id=`salida_id` AND salidas.`producto_id`=productos.`id` AND `tipo_salida_id` = 1 
                                        GROUP BY productos.id,  year(salidas.`created_at`), month(salidas.`created_at`)");
        // $productos=DB::select("SELECT sum(`unidadessal`) as unidades FROM  productos,  ");

        $costoOrden = $producto->costo;
        $precio = $producto->precio;

    //     foreach ($ventas_por_producto as $ventas){
    //     if ($ventas -> id == $id){
    //         var_export($ventas);
    //     }
        


    // }

    foreach ($ventas_por_producto as $venta){
        if ($venta -> id == $id){
        $arrayfechas[]=$venta->created_at_month."/".$venta->created_at_year;
        $arrayLabelVentas[]="'".$venta->created_at_year."-".$venta->created_at_month."'";
        $arrayDatosVentas[]="'".$venta->unidades."'";
        $arrayunidades[]=$venta->unidades;
        }
    }

    for ($i=0; $i<count($arrayunidades); $i++){
        $unidadesUltimoMes=$arrayunidades[$i];
    }
    // echo($unidadesUltimoMes);



    $conteoVentas=count($arrayunidades);


    // print_r($arrayLabelVentas);
    // print_r($arrayDatosVentas);


    $labelVentas=implode(",", $arrayLabelVentas);
    $datosVentas=implode(",", $arrayDatosVentas);
    // echo($datosVentas);

    $trainingData = array();

    for ($i=0; $i<=count($arrayfechas)-1; $i++){
        array_push($trainingData,["fecha"=>$arrayfechas[$i],"unidades"=>$arrayunidades[$i],"precio"=>1]);
        $max[]=$trainingData[$i]["unidades"];
    }

        // echo "fecha";
        $date = count($arrayfechas);
        // echo $date;

        // echo "highest";
        $highest=max($max);
        // echo $highest;


  

    return view('prediccionProducto')->with('unidadesUltimoMes', $unidadesUltimoMes)
    ->with('precio', $precio)->with('costoOrden', $costoOrden)->with('conteoVentas', $conteoVentas)
    ->with('highest', $highest)->with('trainingData', $trainingData)->with('datosVentas', $datosVentas)
    ->with('labelVentas', $labelVentas)->with('ventas_por_producto', $ventas_por_producto)
    ->with('producto', $producto)->with('date', $date);

    }

  
    
    public function regresionLineal(){
        
        return view('index');

    }
    

    public function edit($id)
    {
        $producto = Producto::find($id);
        $salida = Salida::find($id);
        return view('salidas.edit')->with('salida', $salida)->with('producto', $producto);
    }
    public function editunidades($id)
    {
        $producto = Producto::find($id);
        
        return view('salidas.edit')->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salida = Salida::find($id);
        $producto = Producto::find($id);
        $salida -> id = $request -> get('id');
        //$salida -> producto_id = $request -> get('producto_id');
        $salida -> unidadessal = $request -> get('unidadessal');
        $producto -> unidades = $request -> get('unidades');
        $salida -> created_at = $request -> get('created_at');
        $salida -> updated_at = $request -> get('updated_at');
        //$salida->producto()->is($request->input('producto_id'));

        $salida -> save();
        $producto -> save();

        return redirect('/salidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        $salida = Salida::find($id);
        alert()->success('Eliminado!','La salida ha sido eliminada');
        $producto_id=$salida -> producto_id;
        $results = DB::select("SELECT unidadessal FROM salidas WHERE id = $id");

        foreach ($results as $result){
            $unidades = $result->unidadessal;
            $sql = "UPDATE productos SET unidades = unidades + $unidades WHERE id= $producto_id";
                $productos = DB::select($sql);
        }
        $salida -> delete();
        return redirect('/salidas');
    }
}
