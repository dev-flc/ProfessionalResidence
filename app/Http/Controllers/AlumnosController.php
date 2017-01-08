<?php
use Residence\Models;

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
#use Auth;
use Residence\Models\Alumno;
use Residence\Models\Asesor;
use Residence\Models\Pivot;
use Residence\User;
use Residence\Models\Tutor;


use Residence\Models\Esquema;

use Residence\Models\Seguimiento;
use Residence\Models\Anteproyecto;
use Residence\Models\Documento;
use Residence\Models\Documentoasignado;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Seguito;
use Residence\Models\Estatus;
use Residence\Models\Escuela;
use Residence\Models\Direccion;
use BrianFaust\SweetFlash;
use Laracasts\Flash\Flash;

class AlumnosController extends Controller
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


     return View('admin.alumnos.index')
     ->with('aaa',$aaa)
     ->with('i',$i);
   

    }

     public function list(Request $request)
    {  
       
        $aaa=Pivot::Buscador($request->matricula)       
        ->join('alumnos','alumnos.id','=','alumnos_asesores.ALU_id')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','alumnos_asesores.ALU_id')
        ->paginate(9);

       
        $asesores=Asesor::all();


     return View('admin.alumnos.list')
     ->with('asesores',$asesores)
     ->with('aaa',$aaa);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #dd("create");
        $escuela=Escuela::all();
        return view('admin.alumnos.create')->with('escuela',$escuela);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        #dd("yes");
        
        $ant=new Anteproyecto;
        $ant->ANT_nombre="";
        $ant->ANT_descripcion="";
        $ant->EST_id=2;
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
            $documentos->DOC_descripcion="";
            $documentos->DOC_fecha=$date; 
            $documentos->DOC_archivo="archivo.pdf"; 
            $documentos->ANT_id=$idante;
            $documentos->EST_id=1;
            $documentos->save();

        }
       
       $esquema=new Esquema;
       $esquema->ESQ_nombre="";
       $esquema->ESQ_descripcion="";
       $esquema->EST_id=5;
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
        $seguimiento->SEG_descripcion="";
        $seguimiento->SEG_fecha=$fec;
        $seguimiento->SEG_archivo="archivo.pdf";
        $seguimiento->ESQ_id=$ides;
        $seguimiento->EST_id=2;
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
            $direcciones=new Direccion;
            $direcciones->DIR_calle=($request->calle);
            $direcciones->DIR_numero=($request->numero);
            $direcciones->DIR_estado=($request->estado);
            $direcciones->DIR_ciudad=($request->ciudad);
            $direcciones->DIR_colonia=($request->colonia);
            $direcciones->DIR_cp=($request->cp);
            $direcciones->save();
            $iddireccion = Direccion::find($direcciones->id);


            #nuevo usuario
            $user=new User;
            $user->name=($request->nombreuser);
            $user->email=($request->correo);
            $user->password=bcrypt($request->pass);
            $user->foto="foto.png";
            $user->type="alumno";
            $user->save();
            $iduser= User::find($user->id);
            

            $alumno=new Alumno;
            $alumno->ALU_nombre=($request->nombre);   
            $alumno->ALU_apellido_p=($request->apellidop);
            $alumno->ALU_apellido_m=($request->apellidom);
            $alumno->ALU_sexo=($request->sex);
            $alumno->ALU_tel=($request->telefono);
            $alumno->ALU_cel=($request->celular);
            $alumno->ALU_matricula=($request->matricula);
            $alumno->ALU_semestre=($request->semestre); 
            $alumno->ALU_periodo=($request->periodo); 
            $alumno->EST_id=1;
            $alumno->USU_id=($iduser->id);
            $alumno->TUT_id=$tutorid;
            $alumno->DIR_id=($iddireccion->id); 
            #$alumno->ESC_id=1;
            $alumno->ANT_id=$idante;
            $alumno->ESQ_id=$ides;
            $alumno->save();
            
            $idalu= Alumno::find($alumno->id);
            $alumid=$idalu->id;


            $pivot=new Pivot;
            $pivot->ALU_id=$alumid;
            #$pivot->ASE_id=null;
            $pivot->ALAS_tipo="asesor";
            $pivot->save();
        
        
        flash('Alumno Registrado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
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
            $idalum=$usuu->USU_id;
        }

        $usuario=User::select('*')->where('id','=',$idalum)->get();
        
       
        
        


        return view('admin.alumnos.show')
        ->with('usuario',$usuario)
        ->with('alumno',$alumno);
    }

    public function asignar($id)
    {
        #dd($id);

        $alumno = Alumno::select('*')->where('id','=',$id)->get();
      
      foreach ($alumno as $usuu)
        {
            $iduser=$usuu->USU_id;
        }   
       $usuario=User::select('*')->where('id','=',$iduser)->get();
        
        

       
        #$asesores=Asesor::all();
       $asesores=Asesor::all();
        #$asesores=Pivot::all();



        return view('admin.alumnos.listasesor')
        ->with('asesores',$asesores)
        ->with('usuario',$usuario)
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

       
       $alumno=Alumno::find($id);
    
            $iduser=$alumno->USU_id;
            $idesta=$alumno->EST_id;
            $iddir=$alumno->DIR_id;
           # $idesc=$alumno->ESC_id;

       $usuario=User::find($iduser);
       $estatus=Estatus::find($idesta);
       $direccion=Direccion::find($iddir);
      # $escuela=Escuela::find($idesc);
        
      
/*
       $alum = Alumno::select('*')
       ->join('estatus','estatus.id','=','alumnos.EST_id')
       ->join('users','users.id','=','alumnos.USU_id')
       
       ->join('direcciones','direcciones.id','=','alumnos.DIR_id')
       ->join('escuelas','escuelas.id','=','alumnos.ESC_id')
       #->join('anteproyectos','anteproyectos.id','=','alumnos.ANT_id')
       #->join('esquemas','esquemas.id','=','alumnos.ESQ_id')
       #->join('alumnos_asesores','alumnos_asesores.ALU_id','=','alumnos.id')
       ->findOrFail($id); 
        
        #dd($alum);

        */
       return view('admin.alumnos.edit')
       ->with('alumno', $alumno)
       ->with('usuario', $usuario)
       ->with('estatus', $estatus)
       ->with('direccion', $direccion);
      # ->with('escuela', $escuela);
        
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
        $alumno->ALU_matricula=($request->matricula);
        $alumno->ALU_semestre=($request->semestre);
        $alumno->ALU_periodo=($request->periodo); 

        $alumno->save();
        flash('Alumno Modificado Correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateestatus(Request $request, $id)
    {
        $estatus= Estatus::find($id);
        $estatus ->EST_estatus=$request->estatus;
        $estatus->save();
        
        flash('Estatus modificado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    public function updateescuelas(Request $request, $id)
    {
        dd("jds");
        $escuela= Escuela::find($id);
        $escuela ->ESC_nombre=$request->nombre;
        $escuela ->ESC_clave=$request->clave;
        $escuela->save();
        flash('Datos de escuela actualizados', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    
    public function updatedirecciones(Request $request, $id)
    {
        #dd($id,$request->calle,$request->numero,$request->estado,$request->ciudad,$request->colonia,$request->cp);

        $direcciones= Direccion::find($id);
        $direcciones->DIR_calle=$request->calle;
        $direcciones->DIR_numero=$request->numero;
        $direcciones->DIR_estado=$request->estado;
        $direcciones->DIR_ciudad=$request->ciudad;
        $direcciones->DIR_colonia=$request->colonia;
        $direcciones->DIR_cp=$request->cp;
        $direcciones->save();

        flash('Direccion actualizada correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        #dd("kjaslklas");



        $alumno = Alumno::find($id);
        $idusuario=$alumno->USU_id;
        $idtutor=$alumno->TUT_id;
        $iddir=$alumno->DIR_id;
        $idescuela=$alumno->ESC_id;
        $idante=$alumno->ANT_id;
        $idesquema=$alumno->ESQ_id;

        $asesores = Pivot::select('*')->where('ALU_id','=',$id)->where('ALAS_tipo','=','asesor')->get();
        foreach ($asesores as $ase)
        {
            $idasesor=$ase->id;
            $asesor = Pivot::find($idasesor);
            $asesor->delete();
        }
       

        $revisores = Pivot::select('*')->where('ALU_id','=',$id)->where('ALAS_tipo','=','revisores')->get();
        foreach ($revisores as $re)
        {
            $idrevisor=$re->id;
            $revisor = Pivot::find($idrevisor);
            $revisor->delete();
        }

        $user = User::find($idusuario);
        $tutor = Tutor::find($idtutor);
        $direccion=Direccion::find($iddir);
        $anteproyecto = Anteproyecto::find($idante);
        $esquema = Esquema::find($idesquema);

        
        $alumno->delete();
        $user->delete();
        $tutor->delete();
        $direccion->delete();
        $anteproyecto->delete();
        $esquema->delete();

        flash('Alumnos eliminado correctamente', 'success')->important();
        return redirect()->route('admin.alumnos.index');
    }


public function updateasesorr(Request $request, $id)
    {
        
        $alumno = Pivot::select('*')->where('ALU_id','=',$id)->where('ALAS_tipo','=','asesor')->get();
         foreach ($alumno as $alu)
        {
            $iduser=$alu->id;
        }
        
        $userr = Pivot::find($iduser);
        $userr->ASE_id=$request->asesor;
        $userr->save();
        
        flash('asesor asignado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.list');
    }
   

}
