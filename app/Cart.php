<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $table = 'carrito';
    protected $fillable = [
        'total',
    ];

    public function writer()
    {
        return $this->belongsTo('App\CartDet', 'id_carrito');
    }
}
