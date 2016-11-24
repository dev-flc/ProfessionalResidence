<?php

namespace Residence\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimientoasignado extends Model
{
    protected $table = 'seguitosasignacion';
    protected $filleble=
    [
    	'SEGS_nombre','SEGS_fecha'
    ];

}
