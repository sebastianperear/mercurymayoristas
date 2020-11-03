<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDet extends Model
{

	protected $table = 'carrito_det';
    protected $fillable = [
        'cantidad','precio',
    ];

    public function Cart()
    {
        return $this->belongsToMany('App\Cart', 'id');
    }
}
