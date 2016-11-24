<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarioseguimiento extends Model
{
    protected $table = 'comentarios_seguimientos';
    protected $filleble=
    [
    	'COSE_usuario','COSE_fecha','COSE_comentario','SEG_id'
    ];

    #uno a muchos documentos 
    public function seguimientos()
    {
    	return $this->hasMany('Residence\Models\Seguimiento');
    }
}
