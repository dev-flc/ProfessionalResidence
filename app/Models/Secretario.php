<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Secretario extends Model
{
    protected $table = 'secretarios';
    protected $filleble=
    [
    	'SEC_nombre','SEC_apellido_p','SEC_apellido_m','SEC_tel','SEC_cel','SEC_correo','DIR_id','USU_id'
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

    #uno a muchos Acta
    public function acta()
    {
        return $this->belongsTo('Residence\Models\Acta');
    }
}
