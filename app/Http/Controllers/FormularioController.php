<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;

class formularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Este es el index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("formulario/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $idUsu = auth()->user()->id_empleado;
        $formularios = Formulario::create([
            'empresaContrato' => $request->input('empresaContrato'),
            'motivo' => $request->input('motivo'),
            'opinion' => $request->input('opinion'),
            'id_empleado' => $idUsu,
        ]);

        $formularios->save();
        return view('cargarPdf/indexEmp');
        /*
        $formularios->empresaContrato=$request->empresaContrato;
        $formularios->motivo=$request->motivo;
        $formularios->opinion=$request->opinion;
        $formularios->idUsu =$request->id_empleado;

        $formularios->save();
        return view('cargarPdf/indexEmp');

        */
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view("formulario/update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
