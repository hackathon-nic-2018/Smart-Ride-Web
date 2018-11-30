<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{

    protected $table = 'colegios';
    protected $fillable = [
        'colegio', 'direccion','telefono','logo'
    ];

    public function hijos()
    {
    	return $this->belongsTo('App\Hijo.php');
    }

    public function turnos()
    {
    	return $this->belongsTo('App\Turno.php');
    }
}
