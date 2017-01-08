<?php

namespace Residence\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;


use Closure;

class Alumno
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
       if($this->auth->user()->alumnologin())
        {
            return $next($request);
        }
        elseif($this->auth->user()->asesorlogin())
        {
            return redirect()->route('asesor.alumnos.index');
        }
        elseif($this->auth->user()->presidende())
        {
             return redirect()->route('admin.perfil.index');
        }
         elseif($this->auth->user()->subdirectorlogin())
        {
             return redirect()->route('admin.perfil.index');
        }
        elseif($this->auth->user()->secretariologin())
        {
             return redirect()->route('secretario.perfil.index');
        }
    }
}
