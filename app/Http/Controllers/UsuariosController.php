<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class UsuariosController extends Controller
{    
    public function index()
    {
        $query=DB::table('users')->get();
        return view('usuarios.index',['datos'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        return view('usuarios/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios = Usuario::find($id);

        return view('usuarios.edit',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate(Usuario::$rules);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function destroy($id)
    {
        $usuario = usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}
