<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_servicio;
class tipo_servicio_controller extends Controller
{
   public function index()
    {
    	return view('admin.tipo_servicio.index');
    }
    public function store2(Request $r)
    {
    	
    	
    	$tipo_servicio= new \App\tipo_servicio;
    	
    	$tipo_servicio->nombre_tipo= $r->nombre_tipo;    	
    	$tipo_servicio->save();
    	return response()->json(['mensaje'=>'ok']);
    }
    public function update()
    {   
       $tipo = tipo_servicio::orderBy('id', 'ASC')->paginate(5);
       return view('admin.servicio.index')->with('tipo', $tipo);
    }
    public function eliminar($id)
    {   
       $tipo = tipo_servicio::find($id);
       $tipo->delete();
    }
}
