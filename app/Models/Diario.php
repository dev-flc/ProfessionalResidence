<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $table = 'diarios';
    protected $filleble=
    [
    	'DIA_nombre','DIA_descripcion'
    ];

    #uno a muchos  Nota
    public function nota()
    {
        return $this->belongsTo('Residence\Models\Nota');
    }

    #uno a uno alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }
}
