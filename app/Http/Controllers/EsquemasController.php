<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;
use Residence\Models\Esquema;
use Residence\Models\Alumno;

use Residence\Http\Requests;

class EsquemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {


    $esquema=Esquema::Buscador($request->nombre)
    ->select('*')->where('EST_id','=',6)
    ->orderBy('id', 'asc')
    ->paginate(8);
    $i=0;
    foreach ($esquema as $es)
    {
        $i++;
    }
     return View('admin.esquema.index')
     ->with('i',$i)
     ->with('esquema',$esquema);
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

     public function veresquema($id)
    {
        $esquema= Esquema::find($id);

        $alumno=Alumno::select('*')->where('ESQ_id','=',$id)
        ->join('escuelas','escuelas.id','=','alumnos.ESC_id')
        ->get();
        

        return View('admin.esquema.show')
        ->with('esquema',$esquema)
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
        dd("kjas");
    }
}
