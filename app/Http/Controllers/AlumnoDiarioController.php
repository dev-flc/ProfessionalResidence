<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Alumno;
use Residence\Models\Diario;
use Residence\Models\Anteproyecto;
use Residence\Models\Nota;
use Residence\User;
use Auth;
use Laracasts\Flash\Flash;
class AlumnoDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
      
        $foto = Auth::user()->foto;
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idalum=$alu->id;
        }


        $diario=Diario::select('*')->where('ALU_id','=',$idalum)
        ->join('notas','notas.id','=','diarios.NOT_id')
        ->get();

        
        # dd($diario);
        return view('alumnos.diario.index')
        ->with('diario',$diario)
        ->with('user',$user)
        ->with('alumno',$alumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
         $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idalum=$alu->id;
        }


        $diario=Diario::select('*')->where('ALU_id','=',$idalum)
        ->join('notas','notas.id','=','diarios.NOT_id')
        ->get();
       

        return view('alumnos.diario.create')
        ->with('user',$user)
        ->with('diario',$diario)
        ->with('alumno',$alumno);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('file'))
        { 
            $file=$request->file('file');
            $nombre = 'diario_'.time().'.'.$file->getClientOriginalExtension();   
            $path=public_path().'/files/documentos/';
            $file->move($path, $nombre);
            #dd($file);
        }
        else
        {
            $nombre="archivo.pdf";
        }
        
        #dd($request->nombree,$request->des,$nombre);
        $nota=new Nota;
        $nota->NOT_nombre=($request->nombree);
        $nota->NOT_descripcion=($request->des);
        $nota->NOT_archivo=$nombre;
        $nota->save();

        $idnota= Nota::find($nota->id);
        $idnotaa=$idnota->id;
        
            $fechaentrega=date('Y-m-d');
            $horaa=date('h:i:s');
            $fecha=$fechaentrega." ".$horaa;
        
        $user= Auth::user()->id;

        $alumno = Alumno::select('*')->where('USU_id','=',$user)->get();
        foreach ($alumno as $alu)
        {
            $idalum=$alu->id;
        }

        $diario=new Diario;
        $diario->DIA_nombre=$request->nombre;
        $diario->DIA_descripcion=$request->descripcion;
        $diario->DIA_fecha=$fecha;
        $diario->NOT_id=$idnotaa;
        $diario->ALU_id=$idalum;
        $diario->save();
        flash('La nota fue agregada correctamente', 'info')->important();
        return redirect()->route('alumno.diario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idalum=$alu->id;
        }


        $diario=Diario::select('*')->where('NOT_id','=',$id)->get();
        $nota=Nota::select('*')->where('id','=',$id)->get();
        
        $archivo="archivo.pdf";
        return view('alumnos.diario.show')
        ->with('nota',$nota)
        ->with('user',$user)
        ->with('archivo',$archivo)
        ->with('diario',$diario)
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
       $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();

        $diario = Diario::select('*')->where('NOT_id','=',$id)->get();
        $nota = Nota::select('*')->where('id','=',$id)->get();
        
        return view('alumnos.diario.edit')
        ->with('user',$user)
        ->with('diario',$diario)
        ->with('nota',$nota)
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
        
        if($request->file('file'))
        { 
            $file=$request->file('file');
            $nombre = 'documento_'.time().'.'.$file->getClientOriginalExtension();   
            $path=public_path().'/files/documentos/';
            $file->move($path, $nombre);
        }
        else
        {
            $nombre="archivo.pdf";
        }
        
        $diario = Diario::select('*')->where('id','=',$id)->get();
        foreach ($diario as $dia) {
            $idnota=$dia->NOT_id;
        }
        
        $nota=Nota::find($idnota);
        $nota->NOT_nombre=$request->nombree;
        $nota->NOT_descripcion=$request->des;
        $nota->NOT_archivo=$nombre;
        $nota->save();
        
        $fechaentrega=date('Y-m-d');
        $horaa=date('h:i:s');
        $fecha=$fechaentrega." ".$horaa;

        $diario=Diario::find($id);
        $diario->DIA_nombre=$request->nombre;
        $diario->DIA_descripcion=$request->descripcion;
        $diario->DIA_fecha=$fecha;
        $diario->save();

        flash('Los datos fueron modificados correctamente', 'info')->important();
        return redirect()->route('alumno.diario.index');
        
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

    public function descargadiario($id)
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
    

    public function vereanteproyecto($id)
    {
       
       
       
        $iduser = Auth::user()->id;
        
        $user= User::select('*')->where('id','=',$iduser)->get();

        $alumno = Alumno::select('*')->where('USU_id','=',$iduser)->get();
        foreach ($alumno as $alu)
        {
            $idesquema=$alu->ANT_id;
        }

        $esquema=Anteproyecto::select('*')->where('id','=',$idesquema)->get();

        return view('alumnos.esquema.showesquema')
        ->with('alumno',$alumno)
        ->with('user',$user)
        ->with('esquema',$esquema);
        
        
    }


     public function updateanteproyecto(Request $request, $id)
    {
          
        $esquema=Anteproyecto::find($id);
        $esquema->ANT_nombre=$request->nombre;                   
        $esquema->ANT_descripcion=$request->descripcion;                    
        $esquema->save();

        flash('Anteproyecto modificado correctamente', 'success')->important();
        return redirect()->route('alumno.esquema.index');
      
    }
  
}
