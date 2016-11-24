<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Alumno;
use Residence\Models\Anteproyecto;
use Residence\Models\Documento;
use Residence\Models\Comentariodocumento;
use Residence\User;
use Residence\Http\Controllers\Response;
use Auth;
use Laracasts\Flash\Flash;

class AlumnoEsquemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totaldocumentos=0;
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();
        $foto = Auth::user()->foto;

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idanteproyecto=$alu->ANT_id;
            $idesquema=$alu->ESQ_id;
        }

        $anteproyecto=Anteproyecto::select('*')->where('id','=',$idanteproyecto)->get();

        $documento=Documento::select('*')->where('ANT_id','=',$idanteproyecto)->get();
        foreach ($documento as $doc )
        {
            $totaldocumentos++;
        }
        
        return view('alumnos.esquema.index')
        ->with('user',$user)
        ->with('alumno',$alumno)
        ->with('anteproyecto',$anteproyecto)
        ->with('totaldocumentos',$totaldocumentos)
        ->with('documento',$documento);
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

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $foto = Auth::user()->foto;
         $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();


        $documento =Documento::select('*')->where('id','=',$id)->get();
        $comentario=Comentariodocumento::select('*')->where('DOC_id','=',$id)->get();
        return view('alumnos.esquema.show')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('comentario',$comentario)
        ->with('documento',$documento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $foto = Auth::user()->foto;
         $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();

        $documento =Documento::all()->find($id);
        return view('alumnos.esquema.edit')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('documento',$documento);
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
        
        $user = Auth::user()->id;

        $alumno = Alumno::select('*')->where('USU_id','=',$user)->get();
        foreach ($alumno as $alu)
        {
            $idanteproyecto=$alu->ANT_id;
        }
        
        
        if($request->file('file'))
        { 
            $file=$request->file('file');
            $nombre = 'documento_'.time().'.'.$file->getClientOriginalExtension();   
            $path=public_path().'/files/documentos/';
            $file->move($path, $nombre);
        }
        
            $fechaentrega=date('Y-m-d');
            $horaa=date('h:i:s');
            
     
        $documento= Documento::find($id);
        $documento->DOC_nombre=$request->nombre;
        $documento->DOC_descripcion=$request->descripcion;
        $documento->DOC_fecha=$request->fecha;
        $documento->DOC_fecha_entrega=$fechaentrega;
        $documento->DOC_hora_entrega=$horaa;
        $documento->DOC_archivo=$nombre;
        $documento->ANT_id=$idanteproyecto;
        $documento->EST_id=10;
        $documento->save();

        flash('Los datos Fueron agregados correctamente', 'info')->important();
        return redirect()->route('alumno.esquema.index');
    }

    public function descarga($id)
    {
        #$file= public_path(). "/download/info.pdf";
        $documento = Documento::select('*')->where('id','=',$id)->get();
        foreach ($documento as $docs)
        {
            $nombre=$docs->DOC_archivo;
        }

        $headers = array(
              'Content-Type: application/pdf',
            );
        $path=public_path().'/files/documentos/'.$nombre;
        return response()->file($path,$headers);
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
    public function comentdocument(Request $request, $id)
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

       dd('yess');
    }


}
