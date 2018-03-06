<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ['nombre_servicio', 'valor', 'id_tipo_servicio'];
}
