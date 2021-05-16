<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('entradas')->get();

        //Alert::warning('Revisar salida', 'La cantidad a sacar supera a la cantidad disponible');
        return view('entradas.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$productos = Producto::with('salidas')->get();
        $entradas = new Entrada();
        
        $productos = Producto::all();

        return view('entradas.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $entradas = new Entrada();
        //$productos = Producto::all();
        $entradas -> producto_id = $request -> get('producto_id');
        $entradas -> unidadesentr = $request -> get('unidadesentr');
        if ($entradas -> observaciones = $request -> get('observaciones') != null){
            $entradas -> observaciones = $request -> get('observaciones');
        }else{
            $entradas -> observaciones = "Ninguna";
        }

        $unidadesentr = $_POST['unidadesentr'];
        $producto_id = $_POST['producto_id'];// codigo del articulo que es el mismo que el de arriba
        
                if ($unidadesentr == 0){
                toast('La cantidad a sacar es 0','warning');
                return redirect('/entradas/create')->withInput();
                }else{
                $sql = "UPDATE productos SET unidades = unidades + $unidadesentr WHERE id= $producto_id";
                $productos = DB::select($sql);
                $entradas -> save();
                alert()->success('Registro exitoso','La entrada se ha registrado satisfactoriamente');
                return redirect('/entradas');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
