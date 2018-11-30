<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenUnidad extends Model
{
    protected $table = 'imagen-unidades';
    protected $fillable = [
        'imagen', 'idUnidad'
    ];
    
    public function unidadtrasporte()
    {
    	return $this->hasMany('App\UnidadTransporte.php');
    }
}
