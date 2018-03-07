<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perfil;

class perfil_controller extends Controller
{
    public function index()
    {
    	return view('admin.perfil.index');
    }
    public function store(Request $r)
    {
    	//$perfil= \App\perfil::find(1);
    	//if($perfil)
    	//{
    		$perfil= new \App\perfil;
    	//}
    	$perfil->nombre=$r->nombre;
    	$perfil->nit=$r->nit;
    	$perfil->telefono=$r->telefono;
    	$perfil->razon_social=$r->razon_social;
    	$perfil->direccion=$r->direccion;
    	$perfil->save();
    	return response()->json(['mensaje'=>'ok']);
    }
    public function update()
    {   
        $perfiles = perfil::orderBy('id', 'ASC')->paginate(5);
       return view('admin.perfil.update')->with('perfiles', $perfiles);
    }
    public function eliminar($id)
    {   
       $perfil = perfil::find($id);
       $perfil->delete();
    }
}
