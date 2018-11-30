<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table = 'transportistas';
    protected $fillable = [
        'nombre', 'apellido','cedula', 'direccion','telefono',
    ];
}
