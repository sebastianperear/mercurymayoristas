<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDet extends Model
{
    protected $fillable = [
        'cantidad','precio',
    ];

    public function Cart()
    {
        return $this->hasMany('App\Cart', 'id');
    }
}
