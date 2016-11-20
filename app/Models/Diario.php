<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $table = 'diarios';
    protected $filleble=
    [
    	'DIA_nombre','DIA_descripcion','DIA_fecha','NOT_id','ALU_id'
    ];

    #uno a muchos  Nota
    public function nota()
    {
        return $this->hasOne('Residence\Models\Nota');
    }

    #uno a uno alumno
    public function alumnos()
    {
        return $this->hasMany('Residence\Models\Alumno');
    }
}
