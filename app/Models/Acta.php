<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    protected $table = 'actas';
    protected $filleble=
    [
    	'ACT_nombre','ACT_descripcion','ACT_fecha','SEC_id'
    ];

    #uno a muchos Secretario
    public function secretarios()
    {
    	return $this->hasMany('Residence\Models\Secretario');
    }
}
