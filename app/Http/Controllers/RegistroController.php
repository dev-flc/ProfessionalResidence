<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;

use Residence\Models\Alumno;
use Residence\Models\Diario;
use Residence\Models\Asesor;
use Residence\Models\Nota;
use Residence\Models\Esquema;
use Residence\Models\Tutor;
use Residence\Models\Pivot;
use Residence\Models\Seguimiento;
use Residence\Models\Anteproyecto;
use Residence\Models\Documento;
use Residence\Models\Direccion;
use Residence\Models\Documentoasignado;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Seguito;
use Residence\Http\Requests\Login;

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
    public function store(Login $request)
    {
        
      
        $contra=$request->contra;
        $verifica=$request->verifica;
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
       $esquema->ESQ_nombre="Ingrese el nombre de sus esquema";
       $esquema->ESQ_descripcion="Ingrese la descripcion de su esquema";
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
       
            #nuevo tutor
            $tutor=new Tutor;
            $tutor->TUT_nombre="";
            $tutor->TUT_apellido_p="";
            $tutor->TUT_apellido_m="";
            $tutor->TUT_correo="";
            $tutor->TUT_tel="";
            $tutor->TUT_cel="";
            $tutor->save();
            $idtutor=Tutor::find($tutor->id);
            $tutorid=$idtutor->id;
       

            #nueva direccion
            $di=new Direccion;
            $di->DIR_calle="";
            $di->DIR_numero="";
            $di->DIR_estado="";
            $di->DIR_ciudad="";
            $di->DIR_colonia="";
            $di->DIR_cp="";
            $di->save();
            $iddir=Direccion::find($di->id);
            $dired=$iddir->id;


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
            $useremail=$iduser->email;
            

            $alumno=new Alumno;
            $alumno->ALU_nombre="";
            $alumno->ALU_apellido_p="";
            $alumno->ALU_apellido_m="";
            $alumno->ALU_semestre=7;
            $alumno->ALU_periodo="";
            $alumno->EST_id=1;
            $alumno->USU_id=$idusuario;
            $alumno->TUT_id=$tutorid;
            $alumno->DIR_id=$dired;
            $alumno->ESC_id=1;
            $alumno->ANT_id=$idante;
            $alumno->ESQ_id=$ides;
            $alumno->save();

            $idalu= Alumno::find($alumno->id);
            $alumid=$idalu->id;

            $pivot=new Pivot;
            $pivot->ALU_id=$alumid;
            $pivot->ASE_id=1;
            $pivot->ALAS_tipo="asesor";
            $pivot->save();

            
            flash('El registro fue realizado correctamente', 'success')->important();
            return view('create')
            ->with('useremail',$useremail);
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
