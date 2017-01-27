<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;

use Residence\Models\Secretario;
use Residence\Models\Direccion;
use Residence\User;
use Laracasts\Flash\Flash;
class AdminSecretarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidente=Secretario::all();
        $iduser=0;

        foreach ($presidente as $pre)
        {
            $iduser=$pre->USU_id;
            $iddir=$pre->DIR_id;
        }
        if($iduser=="")
        {
            return View('admin.secretario.create');
        }
        else{
       $user= User::select('*')->where('id','=',$iduser)->get();
        foreach ($user as $us)
        {
            $foto=$us->foto;
        }
        $dir= Direccion::select('*')->where('id','=',$iddir)->get();

       return View('admin.secretario.index')
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
        return View('admin.secretario.create');
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
        $user->type="secretario";
        $user->save();
        $iduser= User::find($user->id);

        $secretario= new Secretario;
        $secretario->SEC_nombre=($request->nombre);
        $secretario->SEC_apellido_p=($request->apellidop);
        $secretario->SEC_apellido_m=($request->apellidom);
        $secretario->SEC_tel=($request->tel);
        $secretario->SEC_cel=($request->cel);
        $secretario->DIR_id=($iddireccion->id);        
        $secretario->USU_id=($iduser->id);        
        $secretario->save();

        flash('Secretario agregado correctamente', 'info')->important();
        return redirect()->route('admin.secretario.index');
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
    
        
       $secretario =Secretario::find($id);
        $iddir=$secretario->DIR_id;
        $idusu=$secretario->USU_id;
        
        $direccion=Direccion::find($iddir);
        $user=User::find($idusu);

       return view('admin.secretario.edit')
       ->with('secretario', $secretario)
       ->with('direccion', $direccion)
       ->with('user', $user);
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
        $secre= Secretario::find($id);
        $secre ->SEC_nombre=$request->nombre;
        $secre ->SEC_apellido_p=$request->apellidop;
        $secre ->SEC_apellido_m=$request->apellidom;
        $secre ->SEC_tel=$request->tel;
        $secre ->SEC_cel=$request->cel;
        $secre->save();
        
        flash('Secretario modificado correctamente', 'info')->important();
        return redirect()->route('admin.secretario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presidente=Secretario::all();
    
        foreach ($presidente as $pre)
        {
            $iduserr=$pre->USU_id;
            $iddirr=$pre->DIR_id;
        }

    $presidente=Secretario::find($id);
     $presidente->delete();

     $user=User::find($iduserr);
     $user->delete();

     $dir=Direccion::find($iddirr);
     $dir->delete();

     

     Flash::warning('El secretario'.$user->name.'fue eliminado correctamente');
     return redirect()->route('admin.secretario.index');
    }


     public function updateusersecretario(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt($request->pass);
        $user->save();

        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('admin.secretario.index');
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
        return redirect()->route('admin.secretario.index');
    }

}
