<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
   	protected $table ='asesores';
    protected $filleble =
    [
        'ASE_nombre','ASE_apellido_p','ASE_apellido_m','ASE_tel','ASE_cel','DIR_id','USU_id'
    ];

    #muchos a muchos alumnos
    public function alumnos()
    {
    	return $this->belongsToMany('Residence\Models\Alumno');
    }

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

    #Buscador
    public function scopeBuscador($query, $nombre)
    {
        return $query-> where('ASE_nombre', 'LIKE', "%$nombre%");
    }
    
}
