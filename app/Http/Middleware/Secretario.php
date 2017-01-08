<?php

namespace Residence\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class Secretario
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
        if($this->auth->user()->secretariologin())
        {
            return $next($request);
        }
        elseif($this->auth->user()->subdirectorlogin())
        {
             return redirect()->route('admin.perfil.index');
        }
        elseif($this->auth->user()->asesorlogin())
        {
            return redirect()->route('asesor.alumnos.index');
        }
        elseif($this->auth->user()->alumnologin())
        {
             return redirect()->route('alumno.perfil.index');
        }
        elseif($this->auth->user()->presidenten())
        {
             return redirect()->route('admin.perfil.index');
        }
        
    }
}
