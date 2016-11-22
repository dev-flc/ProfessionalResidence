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
}
