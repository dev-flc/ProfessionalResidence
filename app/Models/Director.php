<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table ='directores';
    protected $filleble =
    [
        'DI_nombre','DI_apellido_p','DI_apellido_m','DI_correo'
    ];

    #uno a uno  Escuela
    public function escuela()
    {
        return $this->belongsTo('Residence\Models\Escuela');
    }
}
