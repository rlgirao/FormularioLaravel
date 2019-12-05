<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refrigerante extends Model
{
    protected $fillable = [
        'marca', 'tipo', 'sabor', 'litragem', 'valor', 'quantidade'
    ];
}
