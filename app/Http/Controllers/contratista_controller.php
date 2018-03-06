<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contratista_controller extends Controller
{
    public function index()
    {
    	return view('admin.contratista.index');
    }
    public function store(Request $r)
    {
    	$contratista= \App\contratista::find(1);
    	if(!$contratista)
    	{
    		$contratista= new \App\contratista;
    	}
    	$contratista->nombre=$r->nombre;
    	$contratista->cedula=$r->cedula;
    	$contratista->telefono=$r->telefono;
    	$contratista->correo=$r->correo;    	
    	$contratista->save();
    	return response()->json(['mensaje'=>'ok']);
    }
}

