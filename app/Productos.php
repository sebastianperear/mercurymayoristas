<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'codigo','nombre', 'unidad_medida', 'cantidad','precio_base','unidad_minima', 'estado','unidad_maxima','url_img','categoria', 'subcategoria',
    ];
}
