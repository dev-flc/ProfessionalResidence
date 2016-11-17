<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Subdirector extends Model
{
    protected $table = 'subdirectores';
    protected $filleble=
    [
    	'SUB_nombre','SUB_apellido_p','SUB_apellido_m','SUB_tel','SUB_cel','SUB_correo','DIR_id','USU_id'
    ];

   #uno a uno  usuario
    public function user()
    {
        return $this->hasOne('Residence\User');
    }

    #uno a uno Direccion
    public function direccion()
    {
        return $this->hasOne('Residence\Models\Direccion');
    }
}
