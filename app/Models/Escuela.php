<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuelas';
    protected $filleble=
    [
    	'ESC_nombre','ESC_clave','DIR_id','DI_id'
    ];

    #uno a uno  usuario
    public function usuario()
    {
        return $this->hasOne('Residence\Models\Usuario');
    }

    #uno a uno  Direccion
    public function direccion()
    {
        return $this->hasOne('Residence\Models\Direccion');
    }

    #uno a uno  Director
    public function director()
    {
        return $this->hasOne('Residence\Models\Director');
    }

    #uno a muchos alumno
    public function alumno()
    {
        return $this->belongsToMany('Residence\Models\Alumno');
    }

     #Buscador
    public function scopeBuscador($query, $nombre)
    {
        return $query-> where('ESC_nombre', 'LIKE', "%$nombre%");
    }
}
