<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    protected $table = 'hijos';
    protected $fillable = [
        'nombres', 'apellidos','qr','idcolegio'
    ];

    public function padres()
    {
    	return $this->hasMany('App\Padre.php');
    }

    public function colegio()
    {
    	return $this->belongsTo('App\Colegio.php');
    }
}
