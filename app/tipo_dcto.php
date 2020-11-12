<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_dcto extends Model
{
   protected $table = 'tipo_dcto';
    protected $fillable = [
        'nombre','dcto',
    ];
}
