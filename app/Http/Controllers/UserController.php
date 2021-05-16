<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
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
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $usuarios = User::all();
        $usuarios = User::with('roles')->get();
        return view('usuario.indexu')->with('usuarios', $usuarios);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::pluck('title', 'id');
        return view('usuario.createu')->with('roles', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();
        //$usuarios -> id = $request -> get('id');
        $usuarios -> name = $request -> get('name');
        $usuarios -> email = $request -> get('email');
        $usuarios -> profile_photo_path = $request -> get('profile_photo_path');
        $usuarios -> password =  bcrypt($request -> get('password'));
        //$usuarios = User::create($request->validated(['id' => 'required|id']));
        $usuarios -> roles()->sync($request->input('roles',[]));
        $usuarios -> save();

        return redirect('/usuarios');
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
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $usuario = User::find($id);
        $roles = Role::pluck('title', 'id');
        $usuario->load('roles');
        return view('usuario.editu',compact('usuario', 'roles'))->with('usuario', $usuario);
    }
    public function editpass($id)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $usuario = User::find($id);
        
        return view('usuario.password')->with('usuario', $usuario);
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
        $usuario = User::find($id);
        $usuario -> id = $request -> get('id');
        $usuario -> name = $request -> get('name');
        $usuario -> profile_photo_path = $request -> get('profile_photo_path');
        $usuario -> email = $request -> get('email');
        //$usuario -> password = bcrypt($request -> get('password'));
        $usuario->roles()->sync($request->input('roles', []));
        $usuario -> save();

        return redirect('/usuarios');

    }
    public function updatepassword(Request $request, $id)
    {
        $usuario = User::find($id);
        //$usuario -> id = $request -> get('id');
        $usuario -> password = bcrypt($request -> get('password'));
        $usuario -> save();

        return redirect('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $usuario = User::find($id);
        $usuario -> delete();
        return redirect('/usuarios');
    }


}
