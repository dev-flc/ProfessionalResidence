<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;

use Residence\Models\Alumno;
use Residence\User;
use Auth;
use Residence\Models\Asesor;
use Residence\Models\Tutor;
use Residence\Models\Director;
use Residence\Models\Estatus;
use Residence\Models\Escuela;
use Residence\Models\Pivot;
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
        #dd("sd");
        $user = Auth::user()->id;
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idescuela=$alu->ESC_id;
            $idtutor=$alu->TUT_id;
            $idalumno=$alu->id;
        }
        
        $tutor=tutor::select('*')->where('id','=',$idtutor)->get();
        $iddirector=null;
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
        $a=0;
        foreach ($asesor as $as)
        {
            $a++;
        }

        $revisor=Pivot::select('*')->where('ALU_id','=',$idalumno)->where('ALAS_tipo','=','revisor')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','asesores.USU_id')
        ->get();
        $b=0;
        foreach ($revisor as $re)
        {
            $b++;
        }

        #dd($revisor);
        return view('alumnos.perfil.index')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('a',$a)
        ->with('b',$b)
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
        #dd('dsdsds',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('id','=',$id)->get();

        foreach ($alumno as $alu)
        {   $alum=$alu->id;
            $idescuela=$alu->ESC_id;
            $idtutor=$alu->TUT_id;
            $idalumno=$alu->id;
            $iddireccion=$alu->DIR_id;
        }

        $direccion = Direccion::select('*')->where('id','=',$iddireccion)->get();
       $tutor = Tutor::select('*')->where('id','=',$idtutor)->get();

        return view('alumnos.perfil.edit')
        ->with('user',$user)
        ->with('alumno',$alumno)
        ->with('tutor',$tutor)
        ->with('direccion',$direccion);

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
        
        

        $alumno=Alumno::find($id);
        $alumno->ALU_nombre=($request->nombre);     
        $alumno->ALU_apellido_p=($request->apellidop);
        $alumno->ALU_apellido_m=($request->apellidom);
        $alumno->ALU_sexo=($request->sex);
        $alumno->ALU_tel=($request->telefono);
        $alumno->ALU_cel=($request->celular);
        $alumno->ALU_periodo=($request->periodo);
        $alumno->ALU_matricula=($request->matricula);
        $alumno->ALU_semestre=($request->semestre);
        $alumno->save();

        flash('Los datos fueron modificados correctamente', 'info')->important();
        return redirect()->route('alumno.perfil.index');
        
    }

    public function updatefoto(Request $request, $id)
    {
        

       
         if($request->file('file'))
        { 
            $file=$request->file('file');
            $nombre = 'documento_'.time().'.'.$file->getClientOriginalExtension();   
            $path=public_path().'/files/documentos/';
            $file->move($path, $nombre);

            $alumno=User::find($id);
            $alumno->foto=$nombre;
            $alumno->save();
            flash('Los datos fueron modificados correctamente', 'info')->important();
        return redirect()->route('alumno.perfil.index');dd('yessdsd');
        }
        else
        {
            $nombre="foto.png";
        }
        
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("jas");
    }


    

    public function updatedirecc(Request $request, $id)
    {
        $direcciones= Direccion::find($id);
        $direcciones->DIR_calle=$request->calle;
        $direcciones->DIR_numero=$request->numero;
        $direcciones->DIR_estado=$request->estado;
        $direcciones->DIR_ciudad=$request->ciudad;
        $direcciones->DIR_colonia=$request->colonia;
        $direcciones->DIR_cp=$request->cp;
        $direcciones->save();

          flash('Los datos fueron modificados correctamente', 'info')->important();
        return redirect()->route('alumno.perfil.index');
    }

    public function updatetutor(Request $request, $id)
    {


    $tuto= Tutor::find($id);
    $tuto->TUT_nombre =$request->nombre;
    $tuto->TUT_apellido_p=$request->ap;
    $tuto->TUT_apellido_m=$request->am;
    $tuto->TUT_correo=$request->email;
    $tuto->TUT_tel=$request->tel;
    $tuto->TUT_cel=$request->cel; 
    $tuto->save();

    flash('Los datos fueron modificados correctamente', 'info')->important();
        return redirect()->route('alumno.perfil.index');


    }






}
