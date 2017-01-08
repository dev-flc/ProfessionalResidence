<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Acta;
use Auth;
use Residence\User;
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
use Residence\Models\Secretario;
use Residence\Models\Seguimiento;
use Residence\Models\Documentoasignado;


class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hpla
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        

        return View('secretario.acta.create')
        ->with('userr',$userr)
        ->with('acta',$acta)
        ->with('foto',$foto)
        ->with('secretario',$secretario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$user = Auth::user()->id;
        $alumno = Secretario::select('*')->where('USU_id','=',$user)->get();
        foreach ($alumno as $userr)
        {
            $idd=$userr->id;
        }

$time = time();
$fecha= date("Y-m-d H:i:s", $time);
  
        $acta=new Acta;
        $acta->ACT_nombre=($request->titulo);
        $acta->ACT_descripcion=($request->descripcion);
        $acta->ACT_fecha=($fecha);
        $acta->SEC_id=($idd);
        $acta->save();
        flash('Acta agregada correctamente', 'info')->important();
        return redirect()->route('secretario.perfil.index');
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
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("kjsdkj");
    }

    public function actapdf($id)
    {
        $acta= Acta::find($id);
        $pdf = \PDF::loadView('secretario.perfil.pdf',['acta'=>$acta]);
        return $pdf->download('hola.pfd');
    }
}
