<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $filleble=
    [
    	'ROL_rol'
    ];

    #uno a muchos usuario
    public function usuario()
    {
    	return $this->belongsTo('Residence\Models\Usuario');
    }
}
