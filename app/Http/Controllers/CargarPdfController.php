<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\cargarPdf;

class CargarPdfController extends Controller
{
    public function index()
    {
        $idTipoUsu = Auth::user()->tipo_usuario;        
        if($idTipoUsu == 0){                    
            $userId = Auth::id();
            $user = User::find($userId);
            $idUsu = $user->id_empleado;
            
            session()->put('user_' . $userId, true);
            session()->put('user_id_empleado' . $userId, $idUsu);
            //$idUsu = Auth::user()->id_empleado;        
         
            $query = DB::table('archivopdf')
                ->join('empleados','archivopdf.id_empleado','=','empleados.id')
                ->join('users','users.id','=','empleados.id')
                ->select('archivopdf.id_doc','archivopdf.nombre','archivopdf.documento','archivopdf.id_empleado')
                ->where('archivopdf.id_empleado','=',$idUsu)
                ->get();
            
            return view('cargarPdf/indexEmp',['datos'=>$query]);
        }else{
            $query=DB::table('ArchivoPdf')->get();
            return view('cargarPdf/index',['datos'=>$query]);
        }
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
                $reg->id_empleado=$request->get('id_empleado');
                    if($request->hasFile('pdf')){
                        $archivo=$request->file('pdf');            
                        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                        $reg->documento = $archivo->getClientOriginalName();
                    }
                $reg->save();
            DB::commit();
            $query=DB::table('archivopdf')->get();
            return view('cargarPdf.index',['datos'=>$query]);
       } catch(Exception ){
            DB::rollBack();
       }              
    }

    public function show(string $id_doc)
    {
        $query=DB::table('ArchivoPdf')->get();
        return view('cargarPdf/index',['datos'=>$query]);
    }

    public function destroy($id_doc)
    {
        $d = cargarPdf::find($id_doc)->delete();

        return redirect()->route('cargarPdf.index')
            ->with('success', 'CargarPdf deleted successfully');
    }
}
