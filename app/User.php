<?php

namespace Residence;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];
     #uno a uno  Asesor
    public function asesor()
    {
        return $this->belongsTo('Residence\Models\Asesor');
    }

    #uno a uno  Subdirector
    public function subdirector()
    {
        return $this->belongsTo('Residence\Models\Subdirector');
    }

    #uno a uno  Presidente
    public function presidente()
    {
        return $this->belongsTo('Residence\Models\Presidente');
    }

    #uno a uno  Secretario
    public function secretario()
    {
        return $this->belongsTo('Residence\Models\Secretario');
    }

    #uno a uno  Alumno
    public function alumno()
    {
        return $this->belongsTo('Residence\Models\Alumno');
    }

    public function presidende()
    {
        return $this->type === 'presidente';
    }

    public function asesorlogin()
    {
        return $this->type === 'asesor';
    }
    public function alumnologin()
    {
        return $this->type === 'alumno';
    }
}
