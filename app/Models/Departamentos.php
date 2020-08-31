<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    //
    protected $table = 'aby_departamentos';

    protected $fillable = [
        'clave', 'nombre'
    ];

}
