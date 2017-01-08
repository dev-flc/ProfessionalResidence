<?php

namespace Residence\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class Admin
{
    protected $auth;


    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->presidende())
        {
            return $next($request);
        }
        elseif($this->auth->user()->subdirectorlogin())
        {
           return $next($request);
        }
        elseif($this->auth->user()->asesorlogin())
        {
            return redirect()->route('asesor.alumnos.index');
        }
        elseif($this->auth->user()->alumnologin())
        {
             return redirect()->route('alumno.perfil.index');
        }
        elseif($this->auth->user()->secretariologin())
        {
             return redirect()->route('secretario.perfil.index');
        }
        
    }
}
