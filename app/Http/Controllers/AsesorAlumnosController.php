<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Residence\Http\Requests;
use Residence\Models\Alumno;
use Residence\User;
use Residence\Models\Escuela;
use Residence\Models\Asesor;
use Residence\Models\Pivot;
use Residence\Models\Seguimiento;
use Residence\Models\Anteproyecto;
use Residence\Models\Documento;
use Residence\Models\Nota;
use Residence\Models\Esquema;
use Residence\Models\Comentariodocumento;
use Residence\Models\Diario;
use Residence\Models\Direccion;

use Laracasts\Flash\Flash;

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
        $asesor = Asesor::select('*')->where('USU_id','=',$user)->get();
        foreach ($asesor as $userr)
        {
            $idd=$userr->id;
        }
        $userr=User::select('*')->where('id','=',$user)->get();
        $pivot=Pivot::select('*')->where('ASE_id','=',$idd)
        ->join('alumnos','alumnos.id','=','alumnos_asesores.ALU_id')
        ->join('asesores','asesores.id','=','alumnos_asesores.ASE_id')
        ->join('users','users.id','=','alumnos_asesores.ALU_id')
        ->get();

        return View('asesor.alumnos.index')
        ->with('userr',$userr)
        ->with('pivot',$pivot)
        ->with('asesor',$asesor);

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

    public function verdiairio($id)
    {

        $diario = Diario::select('*')->where('id','=',$id)->get();
        foreach ($diario as $di)
        {
            $dia=$di->NOT_id;
        }
        $nota = Nota::select('*')->where('id','=',$dia)->get();

        return View('asesor.alumnos.verdiario')
        ->with('nota',$nota)
        ->with('diario',$diario);
    }


    public function ver($id)
    {
        
        $user = Auth::user()->id;
        
        $asesor = Asesor::select('*')->where('USU_id','=',$user)->get();

        $documento=Documento::select('*')->where('id','=',$id)->get();
        foreach ($documento as $do)
        {
            $docs=$do->ANT_id;
            $docid=$do->id;
        }
        
        $ante=Anteproyecto::select('*')->where('id','=',$docs)->get();
        foreach ($ante as $ant)
        {
            $idante=$ant->id;
        }


       $alumno=Alumno::select('*')->where('ANT_id','=',$idante)->get();
       $comentario=Comentariodocumento::select('*')->where('DOC_id','=',$docid)->get();
       $con=Comentariodocumento::all();

        return View('asesor.alumnos.ver')
        ->with('alumno',$alumno)   
        ->with('asesor',$asesor)   
        ->with('comentario',$comentario)
        ->with('documento',$documento);   
    }





    public function show($id)
    {
        $alum = Alumno::select('*')
       ->join('users','users.id','=','alumnos.USU_id')      
       ->findOrFail($id);

        $user = Alumno::find($id)->ESQ_id;

        $idalumno = Alumno::find($id)->ALU_id;
           
        
        $seguimientos=Seguimiento::select('*')->where('ESQ_id','=',$id)->get();
        
        $diario=Diario::select('*')->where('ALU_id','=',$id)->paginate(7);


        $ante = Alumno::find($id)->ANT_id;
        $idescuela = Alumno::find($id)->ESC_id;
        $idannteproyecto = Alumno::find($id)->ANT_id;
        $idesquema = Alumno::find($id)->ESQ_id;
       
        $documentos=Documento::select('*')->where('ANT_id','=',$ante)
        ->get();
        $anteproyecto=Anteproyecto::select('*')->where('id','=',$idannteproyecto)->get(); 
        $esquema=Esquema::select('*')->where('id','=',$idesquema)->get(); 
        $escuela=Escuela::select('*')->where('id','=',$idescuela)->get();
        $escuelas=Escuela::all();
        $alumnoo=Alumno::select('*')->where('id','=',$id)->get();
       return view('asesor.alumnos.show')
       ->with('alum', $alum)
       ->with('alumnoo', $alumnoo)
       ->with('escuela', $escuela)
       ->with('escuelas', $escuelas)
       ->with('seguimientos',$seguimientos)
       ->with('documentos',$documentos)
       ->with('esquema',$esquema)
       ->with('anteproyecto',$anteproyecto)
       ->with('diario',$diario);
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        
        $userr = User::select('*')->where('id','=',$user)->get();
        $asesor = Asesor::select('*')->where('USU_id','=',$user)->get();
       foreach ($asesor as $as) {
           $iddireccion=$as->DIR_id;
       }
        
       $direccion=Direccion::select('*')->where('id','=',$iddireccion)->get();
       $asesor=Asesor::select('*')->where('id','=',$id)->get();
       

        return View('asesor.alumnos.edit')
        ->with('userr',$userr)   
        ->with('asesor',$asesor)   
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
        //
    }


public function comentariodocumento(Request $request, $id)
    {


        $fechaentrega=date('Y-m-d');
        $horaa=date('h:i:s');
        $fecha=$fechaentrega." ".$horaa;
       $coment=new Comentariodocumento;
       $coment->CODO_usuario=($request->nombre);
       $coment->CODO_fecha=$fecha;
       $coment->CODO_comentario=($request->comentario);
       $coment->DOC_id=$id;
       $coment->save();

$user = Auth::user()->id;
        
        $asesor = Asesor::select('*')->where('USU_id','=',$user)->get();

        $documento=Documento::select('*')->where('id','=',$id)->get();
        foreach ($documento as $do)
        {
            $docs=$do->ANT_id;
            $docid=$do->id;
        }
        
        $ante=Anteproyecto::select('*')->where('id','=',$docs)->get();
        foreach ($ante as $ant)
        {
            $idante=$ant->id;
        }


       $alumno=Alumno::select('*')->where('ANT_id','=',$idante)->get();
       $comentario=Comentariodocumento::select('*')->where('DOC_id','=',$docid)->get();
       $con=Comentariodocumento::all();

       flash('comentario agregado correctamente', 'info')->important();
        return View('asesor.alumnos.ver')
        ->with('alumno',$alumno)   
        ->with('asesor',$asesor)   
        ->with('comentario',$comentario)
        ->with('documento',$documento);
    }



    public function escuelaa(Request $request, $id)
    {
        
        $school=Alumno::find($id);
        $school->ESC_id=($request->escuela);
        $school->save();
        flash('Asignacion de escuela correctamente', 'info')->important();
        return redirect()->route('asesor.alumnos.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("admin");
    }

  public function descargaanteproyecto($id)
    {
      

        $nota = Documento::select('*')->where('id','=',$id)->get();

#        dd($nota);
        foreach ($nota as $docs)
        {
            $nombre=$docs->DOC_archivo;
        }
        $path=public_path().'/files/documentos/'.$nombre;
        
        return response()->download($path);

    }

public function descargadiarioasesor($id)
    {
      
        $nota = Nota::select('*')->where('id','=',$id)->get();
        foreach ($nota as $docs)
        {
            $nombre=$docs->NOT_archivo;
        }
       # dd($nombre);
        $path=public_path().'/files/documentos/'.$nombre;
        
        return response()->download($path);

    }

     public function updatefotoasesor(Request $request, $id)
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
            dd('yes');
        }
        else
        {
            $nombre="foto.png";
        }
        
        
    }

    
     public function updatedir(Request $request, $id)
    {

        $direcciones= Direccion::find($id);
        $direcciones->DIR_calle=$request->calle;
        $direcciones->DIR_numero=$request->numero;
        $direcciones->DIR_estado=$request->estado;
        $direcciones->DIR_ciudad=$request->ciudad;
        $direcciones->DIR_colonia=$request->colonia;
        $direcciones->DIR_cp=$request->cp;
        $direcciones->save();
        
        flash('Direccion  modificada correctamente', 'success')->important();
        return redirect()->route('asesor.alumnos.index');
    }

    
     public function updateuserr(Request $request, $id)
    {
#dd('yes');
        #$direcciones= Direccion::find($id);
        
        
        flash('Direccion  modificada correctamente', 'success')->important();
        return redirect()->route('asesor.alumnos.index');
    }
}
