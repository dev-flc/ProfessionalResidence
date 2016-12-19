<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    protected $table = 'presidentes';
    protected $filleble=
    [
    	'PRE_nombre','PRE_apellido_p','PRE_apellido_m','PRE_tel','PRE_cel','PRE_correo','DIR_id','USU_id'
    ];

     #uno a uno Direccion
    public function direccion()
    {
        return $this->hasOne('Residence\Models\Direccion');
    }
    
    #uno a uno  usuario
    public function user()
    {
        return $this->hasOne('Residence\User');
    }

   
}
