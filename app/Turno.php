<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    protected $fillable = [
        'turno', 'idColegio',
    ];
    
    public function colegio()
    {
    	return $this->hasMany('App\Colegio.php');
    }
}
