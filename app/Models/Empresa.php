<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'aby_empresa';

    protected $fillable = [
        'clave', 'nombre', 'represante', 'rfc'
    ];

}
