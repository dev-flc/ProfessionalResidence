<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Residence\Http\Requests;
use Residence\Models\Alumno;
use Residence\Models\Asesor;
use Residence\Models\Pivot;
use Residence\Models\Seguimiento;
use Residence\Models\Documento;
use Residence\Models\Nota;
use Residence\Models\Diario;

class AsesorAlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        
        $user = Auth::user()->id;
        #$user=11;
        $asesor = Asesor::select('*')->where('USU_id','=',$user)->get();
        foreach ($asesor as $userr)
        {
            $idd=$userr->id;
        }
        #dd($idd);

        $pivot=Pivot::select('*')->where('ASE_id','=',$idd)
        ->join('alumnos','alumnos.id','=','alumnos_asesores.ALU_id')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','alumnos_asesores.ALU_id')
        ->get();

       /* 
        foreach ($pivot as $uss)
        {
            echo $uss->ESQ_id;
            if($uss->ESQ_id==null){
                echo "string";
            }
        }
        */
        #dd($pivot);
        return View('asesor.alumnos.index')->with('pivot',$pivot)->with('asesor',$asesor);
       # return View('asesor.alumnos.index');
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
        
        $alum = Alumno::select('*')
       ->join('estatus','estatus.id','=','alumnos.EST_id')
       ->join('users','users.id','=','alumnos.USU_id')      
       ->join('direcciones','direcciones.id','=','alumnos.DIR_id')
       ->join('escuelas','escuelas.id','=','alumnos.ESC_id')
       ->findOrFail($id);

        $user = Alumno::find($id)->ESQ_id;

        $idalumno = Alumno::find($id)->ALU_id;
           
        
        $seguimientos=Seguimiento::select('*')->where('ESQ_id','=',$id)->get();
        
        $diario=Diario::select('*')->where('ALU_id','=',$id)->paginate(7);
/*
        foreach ($seguimientos as $uss)
        {
            
            if($uss->ESQ_id>=1){
                echo "string";
            }
            elseif($uss->ESQ_id==""){
                echo "kjdskjsd";
            }
        }
*/

        $ante = Alumno::find($id)->ANT_id;
       
        $documentos=Documento::select('*')->where('ANT_id','=',$ante)
        ->get();

       return view('asesor.alumnos.show')->with('alum', $alum)->with('seguimientos',$seguimientos)->with('documentos',$documentos)->with('diario',$diario);
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
