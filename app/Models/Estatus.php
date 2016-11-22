<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    protected $table = 'estatus';
    protected $filleble=
    [
    	'EST_estatus'
    ];

    #uno a muchos anteproyecto
    public function anteproyecto()
    {
    	return $this->belongsTo('Residence\Models\Anteproyecto');
    }

    #uno a muchos Esquema
    public function esquema()
    {
    	return $this->belongsTo('Residence\Models\Esquema');
    }

    #uno a muchos Alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }

    public function seguimiento()
    {
        return $this->belongsTo('Residence\Models\Seguimiento');
    }

    public function documento()
    {
        return $this->belongsTo('Residence\Models\Documento');
    }
}
