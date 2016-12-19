<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    protected $table = 'alumnos_asesores';
    protected $filleble=
    [
    	'ALU_id','ASE_id','ALAS_tipo'
    ];
    #Buscador
    public function scopeBuscador($query, $matricula)
    {
        return $query-> where('ALU_matricula', 'LIKE', "%$matricula%");
    }
}
