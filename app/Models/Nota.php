<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $filleble=
    [
    	'NOT_nombre','NOT_descripcion','NOT_archivo','DIA_id'
    ];

    #uno a muchos Diario
    public function diarios()
    {
    	return $this->hasMany('Residence\Models\Diario');
    }
}
