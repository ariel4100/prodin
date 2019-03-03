<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoRelacionados extends Model
{

    public $table = 'producto_relacionados';
    protected $fillable = [
        'producto', 'orden', 'producto_id',
    ];

    public function relacionados()
    {
        return $this->belongsTo('App\Producto');
    }
}
