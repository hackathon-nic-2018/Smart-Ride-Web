<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadTransporte extends Model
{
    protected $table = 'unidad_transportes';
    protected $fillable = [
        'marca', 'descripcion','placa','idTransportista','idColegio'
    ];
    
    public function colegio()
    {
    	return $this->hasMany('App\Colegio.php');
    }

    public function Transportista()
    {
    	return $this->hasMany('App\Transportista.php');
    }

    public function Imagenunidad()
    {
    	return $this->belongsTo('App\ImagenUnidad.php');
    }
}
