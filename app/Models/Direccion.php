<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table ='direcciones';
    protected $filleble =
    [
        'DIR_calle','DIR_numero','DIR_estado','DIR_ciudad','DIR_colonia','DIR_cp'
    ];

    #uno a uno  Asesor
    public function asesor()
    {
        return $this->belongsTo('Residence\Models\Asesor');
    }

    #uno a uno  Subdirector
    public function subdirector()
    {
        return $this->belongsTo('Residence\Models\Subdirector');
    }

    #uno a uno  Presidente
    public function presidente()
    {
        return $this->belongsTo('Residence\Models\Presidente');
    }

    #uno a uno  Secretario
    public function secretario()
    {
        return $this->belongsTo('Residence\Models\Secretario');
    }

    #uno a uno  Escuela
    public function escuela()
    {
        return $this->belongsTo('Residence\Models\Escuela');
    }

    #uno a uno  Alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }

}
