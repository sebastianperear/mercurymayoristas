<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'asunto','id_cliente', 'prioridad', 'estado','mensaje',
    ];
}
