<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Esquema extends Model
{
    protected $table = 'esquemas';
    protected $filleble=
    [
    	'ESQ_nombre','ESQ_Descripcion','EST_id'
    ];

    #uno a muchos estatus
    public function estatus()
    {
    	return $this->hasMany('Residence\Models\Estatus');
    }

    #uno a muchos Seguimiento
    public function seguimiento()
    {
        return $this->belongsTo('Residence\Models\Seguimiento');
    }

    #uno a uno alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }
}
