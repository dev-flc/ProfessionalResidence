<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Documentoasignado extends Model
{
    protected $table = 'documentosasignacion';
    protected $filleble=
    [
    	'DOCS_nombre','DOCS_fecha'
    ];
}
