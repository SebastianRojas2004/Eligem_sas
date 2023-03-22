<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        $Formulario = Formulario::post();

        return view('Formulario.index',['Formulario' => $Formulario]);
    }

    /*
    public function show(Formulario $Formulario)
    {
        return view('Formulario.show',['Formulario' => $Formulario]);
    }
    */

    public function create()
    {
        return view('Formulario.create');
    }

    public function store()
    {
        return 'funciona el store';
    }
}
