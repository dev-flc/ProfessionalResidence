<?php
use Residence\Models;

namespace Residence\Http\Controllers;

use Illuminate\Http\Request;

use Residence\Http\Requests;
#use Auth;
use Residence\Models\Alumno;
use Residence\Models\Asesor;
use Residence\User;
use Residence\Models\Estatus;
use Residence\Models\Escuela;
use Residence\Models\Direccion;
use BrianFaust\SweetFlash;
use Laracasts\Flash\Flash;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  

#    $user = Auth::user();

   
    #$aaa =Alumno::Buscador($request->matricula)->select('*')->join('users','users.id','=','alumnos.USU_id')->paginate(5);
     $aaa=Alumno::Buscador($request->matricula)->paginate(5);
     return View('admin.alumnos.index')->with('aaa',$aaa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuela=Escuela::all();
        return view('admin.alumnos.create')->with('escuela',$escuela);
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
        $user->type="alumno";
        $user->save();
        $iduser= User::find($user->id);



        $escuela= new Alumno;
        $escuela->ALU_nombre=($request->nombre);     
        $escuela->ALU_apellido_p=($request->apellidop);
        $escuela->ALU_apellido_m=($request->apellidom);
        $escuela->ALU_sexo=($request->sex);
        $escuela->ALU_tel=($request->telefono);
        $escuela->ALU_cel=($request->celular);
        $escuela->ALU_matricula=($request->matricula);
        $escuela->ALU_semestre=($request->semestre); 

        $escuela->EST_id=1;
        $escuela->USU_id=($iduser->id);
        $escuela->DIR_id=($iddireccion->id);  
        $escuela->ESC_id=($request->escuelaid);
        $escuela->save();           
        
        flash('Alumno Registrado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alum = Alumno::select('*')
       ->join('estatus','estatus.id','=','alumnos.EST_id')
       ->join('users','users.id','=','alumnos.USU_id')
       ->join('tutores','tutores.id','=','alumnos.Tid')
       ->join('direcciones','direcciones.id','=','alumnos.id')
       ->join('escuelas','escuelas.id','=','alumnos.id')
       ->join('anteproyectos','anteproyectos.id','=','alumnos.id')
       ->join('esquemas','esquemas.id','=','alumnos.id')
       ->join('alumnos_asesores','esquemas.ALU_id','=','alumnos.id')
       ->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $alum = Alumno::select('*')
       ->join('estatus','estatus.id','=','alumnos.EST_id')
       ->join('users','users.id','=','alumnos.USU_id')
       
       ->join('direcciones','direcciones.id','=','alumnos.DIR_id')
       ->join('escuelas','escuelas.id','=','alumnos.ESC_id')
       #->join('anteproyectos','anteproyectos.id','=','alumnos.ANT_id')
       #->join('esquemas','esquemas.id','=','alumnos.ESQ_id')
       #->join('alumnos_asesores','alumnos_asesores.ALU_id','=','alumnos.id')
       ->findOrFail($id);; 
        
        #dd($alum);
       return view('admin.alumnos.edit')->with('alum', $alum);
        
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
        $alumno=Alumno::find($id);
        $alumno->ALU_nombre=($request->nombre);     
        $alumno->ALU_apellido_p=($request->apellidop);
        $alumno->ALU_apellido_m=($request->apellidom);
        $alumno->ALU_sexo=($request->sex);
        $alumno->ALU_tel=($request->telefono);
        $alumno->ALU_cel=($request->celular);
        $alumno->ALU_matricula=($request->matricula);
        $alumno->ALU_semestre=($request->semestre);
        $alumno->save();
        flash('Alumno Modificado Correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateestatus(Request $request, $id)
    {
        $estatus= Estatus::find($id);
        $estatus ->EST_estatus=$request->estatus;
        $estatus->save();
        
        flash('Estatus modificado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    public function updateescuelas(Request $request, $id)
    {
        $escuela= Escuela::find($id);
        $escuela ->ESC_nombre=$request->nombre;
        $escuela ->ESC_clave=$request->clave;
        $escuela->save();
        flash('Datos de escuela actualizados', 'info')->important();
        return redirect()->route('admin.alumnos.index');
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

        flash('Direccion actualizada correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userr = Alumno::find($id);
        $userr->delete();
        return redirect()->route('admin.alumnos.index');
    }
}
