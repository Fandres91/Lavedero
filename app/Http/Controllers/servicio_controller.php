<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicio;
class servicio_controller extends Controller
{
    public function index()
    {
    	return view('admin.servicio.index');
    }
    public function store(Request $r)
    {
       
            $servicio= new \App\servicio;
        
        $servicio->nombre_servicio=$r->nombre_servicio;
        $servicio->valor=$r->valor;
        $servicio->id_tipo_servicio=$r->id_tipo_servicio;        
        $servicio->save();
        return response()->json(['mensaje'=>'ok']);
    }
    public function update()
    {   
        $servicios = servicio::orderBy('id', 'ASC')->paginate(5);
       return view('admin.servicio.index')->with('servicios', $servicios);
    }
    public function eliminar($id)
    {   
       $servicio = servicio::find($id);
       $servicio->delete();
    }

    
}
