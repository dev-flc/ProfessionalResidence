<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;

use Residence\Models\Alumno;
use Auth;
use Residence\Models\Asesor;
use Residence\Models\Director;
use Residence\Models\Estatus;
use Residence\Models\Escuela;
use Residence\Models\Pivot;
use Residence\Models\Tutor;
use Residence\Models\Direccion;
use Laracasts\Flash\Flash;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user()->id;
        $foto = Auth::user()->foto;

        $alumno = Alumno::select('*')->where('USU_id','=',$user)->get();
        foreach ($alumno as $alu)
        {
            $idescuela=$alu->ESC_id;
            $idtutor=$alu->TUT_id;
            $idalumno=$alu->id;
        }
        
        $tutor=tutor::select('*')->where('id','=',$idtutor)->get();
        
        $escuela=Escuela::select('*')->where('id','=',$idescuela)->get();
        foreach ($escuela as $esc)
        {
            $iddirector=$esc->DI_id;
        }

        $director=Director::select('*')->where('id','=',$iddirector)->get();

        $asesor=Pivot::select('*')->where('ALU_id','=',$idalumno)->where('ALAS_tipo','=','asesor')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','asesores.USU_id')
        ->get();

        $revisor=Pivot::select('*')->where('ALU_id','=',$idalumno)->where('ALAS_tipo','=','revisor')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','asesores.USU_id')
        ->get();

        #dd($revisor);
        return view('alumnos.perfil.index')
        ->with('alumno',$alumno)
        ->with('escuela',$escuela)
        ->with('tutor',$tutor)
        ->with('asesor',$asesor)
        ->with('revisor',$revisor)
        ->with('director',$director);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
