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
class AdminsubperfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $secre= Subdirector::find($id);
        $secre ->SUB_nombre=$request->nombre;
        $secre ->SUB_apellido_p=$request->apellidop;
        $secre ->SUB_apellido_m=$request->apellidom;
        $secre ->SUB_tel=$request->tel;
        $secre ->SUB_cel=$request->cel;
        $secre->save();
        
        flash('Presidente modificado correctamente', 'info')->important();
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
