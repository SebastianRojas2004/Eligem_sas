<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;
use App\Exports\FormularioExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use DB;

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

        $idUsu = Auth::user()->id_empleado;        
        
            $query = DB::table('archivopdf')
                ->join('empleados','archivopdf.id_empleado','=','empleados.id')
                ->join('users','users.id_empleado','=','empleados.id')
                ->select('archivopdf.id_doc','archivopdf.nombre','archivopdf.documento','archivopdf.id_empleado')
                ->where('archivopdf.id_empleado','=',$idUsu)
                ->get();
        return view('cargarPdf.indexEmp',['datos'=>$query]);        
    }

public function exportarTablaEntreFechas(Request $request)
{
    $fechaInicio = $request->input('fecha_inicio');
    $fechaFin = $request->input('fecha_fin');

    return Excel::download(new FormularioExport($fechaInicio, $fechaFin), 'formulario.xlsx');
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view("formulario/update");
    }
}
