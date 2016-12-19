<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Alumno;
use Residence\Models\Esquema;
use Residence\Models\Anteproyecto;
use Residence\Models\Seguimiento;
use Residence\User;
use Residence\Http\Controllers\Response;
use Auth;
use Laracasts\Flash\Flash;
class AlumnoEnsayoController extends Controller
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

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idesquema=$alu->ESQ_id;
        }

        $esquema=Esquema::select('*')->where('id','=',$idesquema)->get();

        $seguimiento=Seguimiento::select('*')->where('ESQ_id','=',$idesquema)->get();
        foreach ($seguimiento as $doc )
        {
            $totaldocumentos++;
        }
        
        
        return view('alumnos.ensayo.index')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('esquema',$esquema)
        ->with('totaldocumentos',$totaldocumentos)
        ->with('seguimiento',$seguimiento);
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

        $seguimiento =Seguimiento::all()->find($id);
        return view('alumnos.ensayo.edit')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('seguimiento',$seguimiento);
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
            $idanteproyecto=$alu->ESQ_id;
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
            
     
        $documento= Seguimiento::find($id);
        $documento->SEG_nombre=$request->nombre;
        $documento->SEG_descripcion=$request->descripcion;
        $documento->SEG_fecha=$request->fecha;
        $documento->SEG_fecha_entrega=$fechaentrega;
        $documento->SEG_hora_entrega=$horaa;
        $documento->SEG_archivo=$nombre;
        $documento->ESQ_id=$idanteproyecto;
        $documento->EST_id=10;
        $documento->save();

        flash('Los datos Fueron agregados correctamente', 'info')->important();
        return redirect()->route('alumno.ensayo.index');
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

    public function updateensayo(Request $request, $id)
    {
          
        $esquema=Esquema::find($id);
        $esquema->ESQ_nombre=$request->nombre;                   
        $esquema->ESQ_descripcion=$request->descripcion;                    
        $esquema->save();

        flash('Ensayo modificado correctamente', 'success')->important();
        return redirect()->route('alumno.ensayo.index');
      
    }


    public function verensayo($id)
    {
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idesquema=$alu->ESQ_id;
        }

        $esquema=Esquema::select('*')->where('id','=',$idesquema)->get();

      
        
        return view('alumnos.ensayo.show')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('esquema',$esquema);
        
    }
}
