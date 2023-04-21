<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Empleado;

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
        $Empleado=Empleado::pluck('nombre','id');
        return view('usuarios/create',compact('Empleado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Usuario::$rules);

        $usuarios = User::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarios = User::find($id);

        return view('usuarios.show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuarios = User::find($id);

        return view('usuarios.edit',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuarios)
    {
        request()->validate(User::$rules);

        $usuarios->update($request->all());

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
        $usuarios = User::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}
