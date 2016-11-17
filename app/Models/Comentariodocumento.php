<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Comentariodocumento extends Model
{
    protected $table = 'comentarios_documentos';
    protected $filleble=
    [
    	'CODO_usuario','CODO_fecha','CODO_hora','CODO_comentario','DOC_id'
    ];

    #uno a muchos documentos 
    public function documentos()
    {
    	return $this->hasMany('Residence\Models\Documento');
    }
}
