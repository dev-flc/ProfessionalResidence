<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $filleble=
    [
    	'NOT_nombre','NOT_descripcion','NOT_archivo'
    ];

    #uno a muchos Diario
    public function diario()
    {
    	return $this->belongsTo('Residence\Models\Diario');
    }
}
