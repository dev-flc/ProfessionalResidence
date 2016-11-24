<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;

use Residence\Models\Alumno;
use Residence\Models\Diario;
use Residence\Models\Nota;
use Residence\Models\Esquema;
use Residence\Models\Seguimiento;
use Residence\Models\Anteproyecto;
use Residence\Models\Documento;
use Residence\Models\Documentoasignado;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Seguito;

use Residence\User;
use Auth;
use Laracasts\Flash\Flash;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $contra=$request->contra;
        $verifica=$request->verifica;

        #dd($contra,$verifica);

       # dd($user,$contra,$verifica,$nombre);

        if($contra==$verifica)
        {
            
             $ant=new Anteproyecto;
        $ant->ANT_nombre="se requiere nombre";
        $ant->ANT_descripcion="se requiere descripción";
        $ant->EST_id=1;
        $ant->save();
        $idnota= Anteproyecto::find($ant->id);
        $idante=$idnota->id;  #id anteproyecto nuevo

        
        $docs=Documentoasignado::all();
        foreach ($docs as $dos)
        {
            $name=$dos->DOCS_nombre;
            $date=$dos->DOCS_fecha;
            $documentos=new Documento;
            $documentos->DOC_nombre=$name;
            $documentos->DOC_descripcion="ingrese descripcion";
            $documentos->DOC_fecha=$date; 
            $documentos->DOC_archivo="archivo.pdf"; 
            $documentos->ANT_id=$idante;
            $documentos->EST_id=9;
            $documentos->save();

        }
       
       $esquema=new Esquema;
       $esquema->ESQ_nombre="se requiere nombre del esquema";
       $esquema->ESQ_descripcion="se requiere descripcion del esquema";
       $esquema->EST_id=1;
       $esquema->save();
       $idesquema=Esquema::find($esquema->id);
       $ides=$idesquema->id;# id del esquema registrado

       $segs= Seguimientoasignado::all();
       foreach ($segs as $se)
       {
        $nom=$se->SEGS_nombre;
        $fec=$se->SEGS_fecha;
        $seguimiento=new Seguimiento;
        $seguimiento->SEG_nombre=$nom;
        $seguimiento->SEG_descripcion="ingrese descripcion";
        $seguimiento->SEG_fecha=$fec;
        $seguimiento->SEG_archivo="archivo.pdf";
        $seguimiento->ESQ_id=$ides;
        $seguimiento->EST_id=9;
        $seguimiento->save();

       
       }
            #nuevo usuario
            $user=new User;
            $user->name=$request->nombre;
            $user->email=$request->email;
            $user->password=bcrypt($request->contra);
            $user->foto="foto.png";
            $user->save();
            #idusuario nuevo
            $iduser= User::find($user->id);
            $idusuario=$iduser->id;
            $nameuser=$iduser->name;
            

            $alumno=new Alumno;
            $alumno->ALU_nombre="falta dato";
            $alumno->ALU_apellido_p="falta dato";
            $alumno->ALU_apellido_m="falta dato";
            $alumno->ALU_semestre=7;
            $alumno->ALU_periodo="falta dato";
            $alumno->EST_id=1;
            $alumno->USU_id=$idusuario;
            $alumno->ESC_id=1;
            $alumno->ESQ_id=$ides;
            $alumno->ANT_id=$idante;
            $alumno->save();
            
            flash('El registro fue realizado correctamente', 'danger')->important();
            return view('create')
            ->with('nameuser',$nameuser);
        }
        else
        {
        #dd('soy el else');
        flash('Los datos fueron modificados correctamente', 'danger')->important();
        return redirect()->route('registro.index');
        } 
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
