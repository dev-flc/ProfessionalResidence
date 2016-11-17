<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $filleble=
    [
    	'USU_foto','USU_usuario','USU_contrasena','ROL_id'
    ];

    #uno a muchos Rol
    public function roles()
    {
    	return $this->hasMany('Residence\Models\Rol');
    }

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

    #uno a uno  Alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }
}
