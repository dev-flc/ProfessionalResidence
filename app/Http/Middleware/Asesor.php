<?php

namespace Residence\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class Asesor
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
        if($this->auth->user()->asesorlogin())
        {
            return $next($request);
        }
        elseif($this->auth->user()->presidende())
        {
             return redirect()->route('admin.alumnos.index');
        }
        elseif($this->auth->user()->alumnologin())
        {
             return redirect()->route('alumno.perfil.index');
        }
    }
}
