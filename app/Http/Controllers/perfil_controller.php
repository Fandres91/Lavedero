<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfil_controller extends Controller
{
    public function index()
    {
    	return view('admin.perfil.index');
    }
}
