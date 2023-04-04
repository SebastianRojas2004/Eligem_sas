<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\cargarPdf;

class CargarPdfController extends Controller
{
    public function index()
    {
        $query=DB::table('ArchivoPdf')->get();
        return view('cargarPdf.index',['datos'=>$query]);
    }

    public function listado()
    {
        return view('cargarPdf.listado');
    }

    public function Insertar(Request $request){
       try{
            DB::beginTransaction();
                $reg=new cargarPdf;
                $reg->nombre=$request->get('nombre');
                $reg->documento=$request->get('documento');
                    if($request->hasFile('pdf')){
                        $archivo=$request->file('pdf');            
                        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                        $reg->documento = $archivo->getClientOriginalName();
                    }
                $reg->save();
            DB::commit();
       } catch(Exception ){
            DB::rollBack();
       }              
    }
}
