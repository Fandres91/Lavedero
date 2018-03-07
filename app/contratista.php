<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contratista extends Model
{
    protected $table = "contratista";

    protected $fillable = ['nombre', 'cedula', 'telefono', 'correo'];
}
