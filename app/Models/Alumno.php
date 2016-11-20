<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $filleble=
    [
    	'ALU_nombre','ALU_apellido_p','ALU_apellido_m','ALU_sexo','ALU_tel','ALU_cel','ALU_matricula','ALU_semestre','ALU_periodo','EST_id','USU_id','TUT_id','DIR_id','ESC_id','ANT_id','ESQ_id'
    ];

    #muchos a muchos asesores
    public function asesores()
    {
    	return $this->belongsToMany('Residence\Models\Asesor');
    }

    #uno a muchos Estatus 
    public function estatus()
    {
        return $this->hasMany('Residence\Models\Estatus');
    }

    #uno a uno  usuario
    public function user()
    {
        return $this->hasOne('Residence\User');
    }

    #uno a muchos Tutor
    public function tutores()
    {
        return $this->hasMany('Residence\Models\Tutor');
    }

    #uno a uno  direccion
    public function direccion()
    {
        return $this->hasOne('Residence\Models\Direccion');
    }

    #uno a muchos Escuelas
    public function escuelas()
    {
        return $this->hasMany('Residence\Models\Escuela');
    }

    #uno a uno  anteproyecto
    public function anteproyecto()
    {
        return $this->hasOne('Residence\Models\Anteproyecto');
    }

    #uno a uno  esquema
    public function esquema()
    {
        return $this->hasOne('Residence\Models\Esquema');
    }

    #uno a uno  diario
    public function diario()
    {
        return $this->belongsTo('Residence\Models\Diario');
    }

    #Buscador
    public function scopeBuscador($query, $matricula)
    {
        return $query-> where('ALU_matricula', 'LIKE', "%$matricula%");
    }
}
