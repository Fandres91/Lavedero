<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $table = "perfil";

    protected $fillable = ['nombre', 'nit', 'razon_social', 'direccion', 'telefono'];
}
