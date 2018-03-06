<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicio_controller extends Controller
{
    public function index()
    {
    	return view('admin.servicio.index');
    }
    public function store(Request $r)
    {
        $servicio= \App\servicio::find(1);
        if(!$servicio)
        {
            $servicio= new \App\servicio;
        }
        $servicio->nombre_servicio=$r->nombre_servicio;
        $servicio->valor=$r->valor;
        $servicio->id_tipo_servicio=$r->id_tipo_servicio;        
        $servicio->save();
        return response()->json(['mensaje'=>'ok']);
    }
    
}
