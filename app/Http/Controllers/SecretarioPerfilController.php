<?php


#use AsesorAlumnosController.php
namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\User;
use Residence\Models\Diario;
use Residence\Models\Direccion;
use Residence\Models\Asesor;
use Residence\Models\Pivot;
use Residence\Models\Esquema;
use Residence\Models\Presidente;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Alumno;
use Residence\Models\Acta;
use Residence\Models\Escuela;
use Residence\Models\Subdirector;
use Residence\Models\Secretario;
use Residence\Models\Seguimiento;
use Residence\Models\Documentoasignado;
use Auth;


class SecretarioPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user()->id;
         $foto = Auth::user()->foto;
        $secretario = Secretario::select('*')->where('USU_id','=',$user)->get();
        foreach ($secretario as $userr)
        {
            $idd=$userr->id;
        }
        $userr=User::select('*')->where('id','=',$user)->get();
        $acta=Acta::select('*')->where('SEC_id','=',$idd)->get();

        

        return View('secretario.perfil.index')
        ->with('userr',$userr)
        ->with('acta',$acta)
        ->with('foto',$foto)
        ->with('secretario',$secretario);

        
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
         $asesores =Secretario::Select('*')
        ->join('users','users.id','=','secretarios.USU_id')
        ->join('direcciones','direcciones.id','=','secretarios.DIR_id')
        ->findOrFail($id);
        
       # dd($asesores);
       return view('secretario.perfil.edit')->with('asesores', $asesores);
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
        return redirect()->route('secretario.perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("sdkjkjsd");
    }

     public function updateusersecretario(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=bcrypt($request->pass);
        $user->save();

        flash('usuario modificado correctamente', 'success')->important();
        return redirect()->route('secretario.perfil.index');
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
        
        flash('direccion modificada correctamente', 'success')->important();
        return redirect()->route('secretario.perfil.index');
    }
}
