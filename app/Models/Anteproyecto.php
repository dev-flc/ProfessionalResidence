<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Anteproyecto extends Model
{
    protected $table = 'anteproyectos';
    protected $filleble=
    [
    	'ANT_nombre','ANT_descripcion','EST_id'
    ];

    #uno a muchos estatus
    public function estatus()
    {
    	return $this->hasMany('Residence\Models\Estatus');
    }

    #uno a muchos Documento
    public function documento()
    {
        return $this->belongsTo('Residence\Models\Documento');
    }

    #uno a uno alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }
}
