<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';
    protected $filleble=
    [
    	'TUT_nombre','TUT_apellido_p','TUT_apellido_m','TUT_correo','TUT_tel','TUT_cel'
    ];

    #uno a muchos alumno
    public function alumno()
    {
    	return $this->belongsTo('Residence\Models\Alumno');
    }
}
