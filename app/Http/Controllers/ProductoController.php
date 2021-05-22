<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Salida;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $productos = Producto::all();
       
        
        return view('producto.index')->with('productos', $productos);
        
    }
    public function indexinv()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $productos = Producto::all();
        return view('inventario.movimiento')->with('productos', $productos);
        
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos -> codigo = $request -> get('codigo');
        if ($productos -> photo_path = $request -> file('photo_path') == null) {
            $productos -> photo_path = $request -> null;
        }else{
            $productos -> photo_path = $request -> file('photo_path')->store('storage', 'public');
        }
        $productos -> nombreP = $request -> get('nombreP');
        $productos -> descripcion = $request -> get('descripcion');
        $productos -> unidades = $request -> get('unidades');
        $productos -> precio = $request -> get('precio');
        $productos -> costo = $request -> get('costo');
        $productos -> save();
        alert()->success('Creación exitosa','El producto se registrado satisfactoriamente');
        return redirect('/productos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $producto = Producto::find($id);
        return view('producto.edit')->with('producto', $producto);

    }
    public function cambiar_estado($id, $estado){
        $producto = Producto::find($id);
        $producto->update(["estado"=>$estado]);
        return redirect('/productos');
        
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
        $producto = Producto::find($id);
        
        if($request->hasFile('photo_path')){
            $producto = Producto::find($id); 
            Storage::delete('public/'.$producto->photo_path);
            $producto -> photo_path = $request -> file('photo_path')->store('storage', 'public');
            
        }
        $producto -> codigo = $request -> get('codigo');
        $producto -> nombreP = $request -> get('nombreP');
        $producto -> descripcion = $request -> get('descripcion');
        $producto -> unidades = $request -> get('unidades');
        $producto -> precio = $request -> get('precio');
        $producto -> costo = $request -> get('costo');
        $producto -> save();


        return redirect('/productos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $producto = Producto::find($id);
        $producto -> delete();
        alert()->success('El producto ha sido eliminada satisfactoriamente');
        return redirect('/productos');
    }

    // static function estado(Request $request, $id)
    // {
    //     $producto = Producto::find($id);
    //     $producto -> estado = $request -> get('estado');
    //     if ($producto->estado == 1 ? $producto->estado=0:$producto->estado=1);
    //     $producto -> save();

    //     return redirect('/productos');

    // }
}
