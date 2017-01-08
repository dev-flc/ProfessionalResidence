<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Residence\Models\Alumno;
use Residence\Models\Pivot;
use Residence\Models\Asesor;
use Residence\User;
use Residence\Http\Requests;

class RevisoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $aaa=Alumno::Buscador($request->matricula)
      ->join('users','users.id','=','alumnos.USU_id')
    ->select(
        'alumnos.id',
        'alumnos.ALU_nombre',
        'alumnos.ALU_apellido_p',
        'alumnos.ALU_apellido_m',
        'alumnos.ALU_sexo',
        'alumnos.ALU_tel',
        'alumnos.ALU_cel',
        'alumnos.ALU_matricula',
        'alumnos.ALU_semestre',
        'alumnos.ALU_periodo',
        'users.foto'
        )
    
    ->orderBy('id', 'desc')
    ->paginate(8);
    $i=1;

     return View('admin.revisores.index')
     ->with('aaa',$aaa)
     ->with('i',$i);
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
        #dd($request->id,$request->asesor);

        $asesor= new Pivot;
        $asesor->ALU_id=($request->id);
        $asesor->ASE_id=($request->asesor);
        $asesor->ALAS_tipo="revisor";
        $asesor->save();

        flash('Asesor agregado correctamente', 'info')->important();
        return redirect()->route('admin.revisores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::select('*')->where('id','=',$id)->get();
      

      foreach ($alumno as $usuu)
        {
            $iduser=$usuu->USU_id;
        }   
       $usuario=User::select('*')->where('id','=',$iduser)->get();
               
        #$asesores=Asesor::all();
       $asesores=Asesor::all();
        $pivot=Pivot::all();

        $mensaje1="";
        $mensaje2="";
        foreach ($pivot as $pi)
        {
            if($pi->ALAS_tipo=="revisor")
            {
                if($pi->ALU_id==$id)
                {
                    $mensaje1="si";   
                }
                else{
                    $mensaje2="no";
                }
            }            
        } 

        if($mensaje1=="si"){
            $mensaje="si";
        }
        else{
            $mensaje="no";
        }
       
       $a=0;
         foreach ($pivot as $ii)
        {
        if($ii->ALAS_tipo=="revisor")
            if($ii->ALU_id==$id){
                $a++;
            }
        }

        return view('admin.revisores.asignar')
        ->with('asesores',$asesores)
        ->with('a',$a)
        ->with('usuario',$usuario)
        ->with('pivot',$pivot)
        ->with('mensaje',$mensaje)
        ->with('alumno',$alumno); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $pic=Pivot::find($id);
         $ids=$pic->ALU_id;
             $alumno = Alumno::select('*')->where('id','=',$ids)->get();
      

      foreach ($alumno as $usuu)
        {
            $iduser=$usuu->USU_id;
        }   
       $usuario=User::select('*')->where('id','=',$iduser)->get();
               
        #$asesores=Asesor::all();
       $asesores=Asesor::all();
        $pivot=Pivot::all();

        $mensaje1="";
        $mensaje2="";
        foreach ($pivot as $pi)
        {
            if($pi->ALAS_tipo=="revisor")
            {
                if($pi->ALU_id==$id)
                {
                    $mensaje1="si";   
                }
                else{
                    $mensaje2="no";
                }
            }            
        } 

        if($mensaje1=="si"){
            $mensaje="si";
        }
        else{
            $mensaje="no";
        }
       
       $a=0;
         foreach ($pivot as $ii)
        {
        if($ii->ALAS_tipo=="revisor")
            if($ii->ALU_id==$id){
                $a++;
            }
        }
        $enviar=$id;

        return view('admin.revisores.edit')
        ->with('asesores',$asesores)
        ->with('a',$a)
        ->with('usuario',$usuario)
        ->with('enviar',$enviar)
        ->with('pivot',$pivot)
        ->with('mensaje',$mensaje)
        ->with('alumno',$alumno); 
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
        $asesor= Pivot::find($id);
        $asesor->ALU_id=($request->id);
        $asesor->ASE_id=($request->asesor);
        $asesor->ALAS_tipo="revisor";
        $asesor->save();

        flash('Asesor modificado correctamente', 'info')->important();
        return redirect()->route('admin.revisores.index');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("kjas");
    }
}
