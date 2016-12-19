<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Diario;
use Residence\Models\Direccion;
use Residence\Models\Asesor;
use Residence\Models\Pivot;
use Residence\Models\Esquema;
use Residence\Models\Presidente;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Alumno;
use Residence\Models\Escuela;
use Residence\Models\Subdirector;
use Residence\Models\Seguimiento;
use Residence\Models\Documentoasignado;
use Residence\User;

use Auth;

class AdminperfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = Auth::user()->foto;
        $idd = Auth::user()->id;
        $type = Auth::user()->type;
                $idfull=$idd;
        
        if($type=="subdirector")
        {
            $presidente= Subdirector::select('*')->where('USU_id','=',$idd)->get();
            foreach ($presidente as $pre)
            {
                $iddir=$pre->DIR_id;
                
            }
        }
        elseif($type=="presidente")
        {
            $presidente= Presidente::select('*')->where('USU_id','=',$idd)->get();
            foreach ($presidente as $pre)
            {
                $iddir=$pre->DIR_id;
            }
        }


        $dir= Direccion::select('*')->where('id','=',$iddir)->get();
        $seguimiento=Seguimientoasignado::all();
        $documento=Documentoasignado::all();
        

        $alumno=Alumno::all();
        $al=0; 
        foreach ($alumno as $alu) {
                   $al++;
                 }
                
        $asesor=Asesor::all();
        $as=0; 
        foreach ($asesor as $ass) {
                   $as++;
                 }

        $escuela=Escuela::all();
        $es=0; 
        foreach ($escuela as $ess) {
                   $es++;
                 }

        $see=Esquema::all();
        $se=0; 
        foreach ($see as $s) {
                   $se++;
                 }
        
        return View('admin.perfil.index')
        ->with('presidente',$presidente)
        ->with('dir',$dir)
        ->with('seguimiento',$seguimiento)
        ->with('documento',$documento)
        ->with('al',$al)
        ->with('as',$as)
        ->with('es',$es)
        ->with('idfull',$idfull)
        ->with('type',$type)
        ->with('se',$se)
        ->with('foto',$foto);
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

        $user= User::find($id);
        $type=$user->type;
        
       

        if($type=="subdirector")
        {
            $pre=Subdirector::select('*')->where('USU_id','=',$id)->get();
            foreach ($pre as $p)
                {
                    $idpre=$p->id;
                }
            $presidente=Subdirector::find($idpre);
            $iddir=$presidente->DIR_id;
            $iduser=$presidente->USU_id;

          
            $direccion=Direccion::find($iddir);
            $usuario=User::find($iduser);
           

            
           # dd($asesores);
           return view('admin.perfil.editsub')
           ->with('presidente', $presidente)
           ->with('direccion', $direccion)
           ->with('usuario', $usuario);
        }
        else{

            $pre=Presidente::select('*')->where('USU_id','=',$id)->get();
            foreach ($pre as $p)
                {
                    $idpre=$p->id;
                }
            $presidente=Presidente::find($idpre);
            $iddir=$presidente->DIR_id;
            $iduser=$presidente->USU_id;

          
            $direccion=Direccion::find($iddir);
            $usuario=User::find($iduser);
           

            
           # dd($asesores);
           return view('admin.perfil.edit')
           ->with('presidente', $presidente)
           ->with('direccion', $direccion)
           ->with('usuario', $usuario);
       }
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
        
        $secre= Presidente::find($id);
        $secre ->PRE_nombre=$request->nombre;
        $secre ->PRE_apellido_p=$request->apellidop;
        $secre ->PRE_apellido_m=$request->apellidom;
        $secre ->PRE_tel=$request->tel;
        $secre ->PRE_cel=$request->cel;
        $secre->save();
        
        flash('Presidente modificado correctamente', 'info')->important();
        return redirect()->route('admin.perfil.index');
    }


     public function updateuserperfil(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt($request->pass);
        $user->save();

        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('admin.perfil.index');
    }

     public function updatedireccion(Request $request, $id)
    {
        $direcciones= Direccion::find($id);
        $direcciones->DIR_calle=$request->calle;
        $direcciones->DIR_numero=$request->numero;
        $direcciones->DIR_estado=$request->estado;
        $direcciones->DIR_ciudad=$request->ciudad;
        $direcciones->DIR_colonia=$request->colonia;
        $direcciones->DIR_cp=$request->cp;
        $direcciones->save();
        
        flash('direccion modificadoa correctamente', 'success')->important();
        return redirect()->route('admin.perfil.index');
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
