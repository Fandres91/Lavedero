<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_servicio extends Model
{
    protected $table = "tipo_servicio";

    protected $fillable = ['nombre_tipo'];
}
