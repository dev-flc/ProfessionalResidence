 <?php 
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
        $user->foto="foto.png";
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
        $escuela->ALU_periodo=($request->periodo); 
        $escuela->EST_id=1;
        $escuela->USU_id=($iduser->id);
        $escuela->DIR_id=($iddireccion->id);  
        $escuela->ESC_id=($request->escuelaid);
        $escuela->save(); 

         $idalumm= Alumno::find($escuela->id);
        


        $asesor = new Pivot;
        $asesor->ALU_id=($idalumm->id); 
        $asesor->ASE_id=1;
        $asesor->ALAS_tipo="asesor";
        $asesor->save();
        
        
        flash('Alumno Registrado correctamente', 'info')->important();
        return redirect()->route('admin.alumnos.index');