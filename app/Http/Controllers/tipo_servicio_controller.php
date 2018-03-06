<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipo_servicio_controller extends Controller
{
   public function index()
    {
    	return view('admin.tipo_servicio.index');
    }
    public function store(Request $r)
    {
    	$tipo_servicio= \App\tipo_servicio::find(1);
    	if(!$tipo_servicio)
    	{
    		$tipo_servicio= new \App\tipo_servicio;
    	}
    	$tipo_servicio->nombre_tipo=$r->nombre_tipo;    	
    	$tipo_servicio->save();
    	return response()->json(['mensaje'=>'ok']);
    
}