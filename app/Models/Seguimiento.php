<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    protected $table = 'seguimientos';
    protected $filleble=
    [
    	'SEG_nombre','SEG_descripcion','SEG_fecha','SEG_fecha_entrega','SEG_hora_entrega','SEG_archivo','ESQ_id','EST_id'
    ];

    #uno a Esquema 
    public function esquemas()
    {
    	return $this->hasMany('Residence\Models\Esquema');
    }
    #uno a muchos estatus 
    public function estatus()
    {
        return $this->hasMany('Residence\Models\Estatus');
    }
    #uno a muchos cometario
    public function comentarioseguimiento()
    {
        return $this->belongsTo('Residence\Models\Comentarioseguimiento');
    }
}
