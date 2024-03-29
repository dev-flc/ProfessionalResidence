<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Presidente;
use Residence\Models\Direccion;
use Residence\User;
use Laracasts\Flash\Flash;




class AdminPresidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidente=Presidente::all();
        $iduser=0;
        foreach ($presidente as $pre)
        {
            $iduser=$pre->USU_id;
            $iddir=$pre->DIR_id;
        }
        if($iduser=="")
        {
            return View('admin.presidente.create');
        }
        else{
       $user= User::select('*')->where('id','=',$iduser)->get();
        foreach ($user as $us)
        {
            $foto=$us->foto;
        }
        
        $dir= Direccion::select('*')->where('id','=',$iddir)->get();


        return View('admin.presidente.index')
        ->with('foto',$foto)
        ->with('dir',$dir)
        ->with('presidente',$presidente);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.presidente.create');
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
        $user->type="presidente";
        $user->save();
        $iduser= User::find($user->id);

        $asesor= new Presidente;
        $asesor->PRE_nombre=($request->nombre);
        $asesor->PRE_apellido_p=($request->apellidop);
        $asesor->PRE_apellido_m=($request->apellidom);
        $asesor->PRE_tel=($request->tel);
        $asesor->PRE_cel=($request->cel);
        $asesor->DIR_id=($iddireccion->id);        
        $asesor->USU_id=($iduser->id);        
        $asesor->save();

        flash('Presidente agregado correctamente', 'info')->important();
        return redirect()->route('admin.presidente.index');
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
        $presidente =Presidente::find($id);
        $iddir=$presidente->DIR_id;
        $idusu=$presidente->USU_id;
        
        $direccion=Direccion::find($iddir);
        $user=User::find($idusu);

       return view('admin.presidente.edit')
       ->with('direccion', $direccion)
       ->with('user', $user)
       ->with('presidente', $presidente);
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
        $asesor= Presidente::find($id);
        $asesor ->PRE_nombre=$request->nombre;
        $asesor ->PRE_apellido_p=$request->apellidop;
        $asesor ->PRE_apellido_m=$request->apellidom;
        $asesor ->PRE_tel=$request->tel;
        $asesor ->PRE_cel=$request->cel;
        $asesor->save();
        
        flash('Presidente modificado correctamente', 'info')->important();
        return redirect()->route('admin.presidente.index');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $presidente=Presidente::all();
    
        foreach ($presidente as $pre)
        {
            $iduserr=$pre->USU_id;
            $iddirr=$pre->DIR_id;
        }

    $presidente=Presidente::find($id);
     $presidente->delete();

     $user=User::find($iduserr);
     $user->delete();

     $dir=Direccion::find($iddirr);
     $dir->delete();

     

     Flash::warning('El presidente'.$user->name.'fue eliminado correctamente');
     return redirect()->route('admin.presidente.index');
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
        return redirect()->route('admin.presidente.index');
    }

    public function updateuserpresidente(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt($request->pass);
        $user->save();

        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('admin.presidente.index');
    }
}
