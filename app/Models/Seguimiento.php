<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    protected $table = 'seguimientos';
    protected $filleble=
    [
    	'SEG_nombre','SEG_descripcion','SEG_fecha','SEG_archivo','ESQ_id'
    ];

    #uno a Esquema 
    public function esquemas()
    {
    	return $this->hasMany('Residence\Models\Esquema');
    }

    #uno a muchos cometario
    public function comentarioseguimiento()
    {
        return $this->belongsTo('Residence\Models\Comentarioseguimiento');
    }
}
