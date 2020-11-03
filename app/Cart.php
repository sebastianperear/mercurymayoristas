<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $table = 'carrito';
    protected $fillable = [
        'total',
    ];

    public function CartDet()
    {
        return $this->belongsToMany('App\CartDet', 'id_carrito');
    }
}
