<?php

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
use Residence\Models\Direccion;
use Residence\Models\Seguimientoasignado;
use Residence\Models\Documentoasignado;



class PlandetrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       # dd("soy el plan");
        $docs=Documentoasignado::all();
        $segs= Seguimientoasignado::all();

         return View('admin.plandetrabajo.index')
           ->with('docs', $docs)
           ->with('segs', $segs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return View('admin.plandetrabajo.create');
    }

      public function createesquema()
    {
        
         return View('admin.plandetrabajo.createesquema');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $docs= new Documentoasignado;
        $docs->DOCS_nombre =($request->nombre);
        $docs->DOCS_fecha=($request->fecha);       
        $docs->save();


        flash('Tarea agregada correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');
    }

  public function storee(Request $request)
    {
        
        $docs= new Seguimientoasignado;
        $docs->SEGS_nombre =($request->nombre);
        $docs->SEGS_fecha=($request->fecha);       
        $docs->save();


        flash('Tarea agregada correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');
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
       $doc=Documentoasignado::find($id);
        return view('admin.plandetrabajo.editant')
       ->with('doc', $doc);
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
        #dd($request->fecha);
        $docs=Documentoasignado::find($id);
        $docs->DOCS_nombre =($request->nombre);
        $docs->DOCS_fecha=($request->fecha);       
        $docs->save();

        flash('Los datos fueron agregados correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');

    }
    public function editesquema($id)
    {
         $seg=Seguimientoasignado::find($id);
        return view('admin.plandetrabajo.editesquema')
       ->with('seg', $seg);
    }
   
    public function upesquema(Request $request, $id)
    {
        $docs=Seguimientoasignado::find($id);
        $docs->SEGS_nombre =($request->nombre);
        $docs->SEGS_fecha=($request->fecha);       
        $docs->save();

        flash('Los datos fueron agregados correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
     $docs=Documentoasignado::find($id);
     $docs->delete();

      flash('Los datos fueron eliminados correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');
    }


    public function destroyesquema($id)
    {
     $docs=Seguimientoasignado::find($id);
     $docs->delete();

      flash('Los datos fueron eliminados correctamente', 'info')->important();
        return redirect()->route('admin.plan.index');
    }
}
