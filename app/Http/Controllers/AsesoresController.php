<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Asesor;
use Residence\Models\Direccion;
use Residence\User;
use Laracasts\Flash\Flash;


class AsesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $asesor = Asesor::Buscador($request->nombre)->orderBy('id', 'DEC')->paginate(6);
        return View('admin.asesores.index')->with('asesor',$asesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.asesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direcciones=new Direccion;
        $direcciones->DIR_calle=($request->calle);
        $direcciones->DIR_numero=($request->numero);
        $direcciones->DIR_estado=($request->estado);
        $direcciones->DIR_ciudad=($request->ciudad);
        $direcciones->DIR_colonia=($request->colonia);
        $direcciones->DIR_cp=($request->cp);
        $direcciones->save();
        $iddireccion = Direccion::find($direcciones->id);

        $user=new User;
        $user->name=($request->nombreuser);
        $user->email=($request->correo);
        $user->password=bcrypt($request->pass);
        $user->foto="user.png";
        $user->type="asesor";
        $user->save();
        $iduser= User::find($user->id);

        $asesor= new Asesor;
        $asesor->ASE_nombre=($request->nombre);
        $asesor->ASE_apellido_p=($request->apellidop);
        $asesor->ASE_apellido_m=($request->apellidom);
        $asesor->ASE_tel=($request->tel);
        $asesor->ASE_cel=($request->cel);
        $asesor->DIR_id=($iddireccion->id);        
        $asesor->USU_id=($iduser->id);        
        $asesor->save();

        flash('Asesor agregado correctamente', 'info')->important();
        return redirect()->route('admin.asesores.index');
        
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
        
        $asesores =Asesor::Select('*')
        ->join('users','users.id','=','asesores.USU_id')
        ->join('direcciones','direcciones.id','=','asesores.DIR_id')
        ->findOrFail($id);
        
       # dd($asesores);
       return view('admin.asesores.edit')->with('asesores', $asesores);
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
        #dd("update");
        
        $asesor= Asesor::find($id);
        $asesor ->ASE_nombre=$request->nombre;
        $asesor ->ASE_apellido_p=$request->apellidop;
        $asesor ->ASE_apellido_m=$request->apellidom;
        $asesor ->ASE_tel=$request->tel;
        $asesor ->ASE_cel=$request->cel;
        $asesor->save();
        
        flash('Asesor modificado correctamente', 'info')->important();
        return redirect()->route('admin.asesores.index');
        
            
    }

    public function updateuser(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt($request->pass);
        $user->save();

        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('admin.asesores.index');
    }
    
    public function updatedirecciones(Request $request, $id)
    {
        $direcciones= Direccion::find($id);
        $direcciones->DIR_calle=$request->calle;
        $direcciones->DIR_numero=$request->numero;
        $direcciones->DIR_estado=$request->estado;
        $direcciones->DIR_ciudad=$request->ciudad;
        $direcciones->DIR_colonia=$request->colonia;
        $direcciones->DIR_cp=$request->cp;
        $direcciones->save();
        
        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('admin.asesores.index');
    }
    

 

    public function destroy($id)
    {
       
        
       $as= Asesor::select('*')->where('id','=',$id)->get();
        

        foreach ($as as $ase)
        {
            $iddirr=$ase->DIR_id;
            $iduserr=$ase->USU_id;

        }

        $asesordelete=Asesor::find($id);
        $asesordelete->delete();

        $user=User::find($iduserr);
        $user->delete();

        $dir=Direccion::find($iddirr);
        $dir->delete();

     

     Flash::warning('El asesor fue eliminado correctamente');
     return redirect()->route('admin.asesores.index');
    }
}
