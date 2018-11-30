<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $table = 'padres';
    protected $fillable = [
        'nombre', 'apellido', 'direccion','telefono',
    ];
    
    public function hijos()
    {
    	return $this->hasMany('App\Hijo.php');
    }
}
