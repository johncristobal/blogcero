<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Clinica;
use App\User;
use App\Alumno;
use App\Profesor;
use App\Expediente;
use \Illuminate\Support\MessageBag;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get clinicas from model and show in view
        $datos['clinicas'] = Clinica::all();
        return view ('Admin.Altaperfil',$datos);
    }
    
    public function login(){
        return view('login');
    }
    
    public function sendmailpass(Request $request){
    
        $mail = $request->input('correo');
        
        //$nuevopass = $this->generarcontrasena();        

        $nuevopass = "passwordtemporal";
        
        $data = array();
        
        Mail::send('html', $data, function($message) use ($request)
        {
           //remitente
           $message->from('info@xatsaautopartes.com', 'info@xatsaautopartes.com');
 
           //asunto
           $message->subject('prueba');
 
           //receptor
           $message->to('cristobaljohn00@gmail.com', 'JOHN CRISTOBAL'); 
        });
        
        echo "Si";
    }
    
    //validate data from login
    public function validatelogin(Request $request){
        //get data from view and validate it
        /*$this->validate($request, [
            'contrasena' => 'required',
            'correo' => 'required'
        ]);*/
        
        $mail = $request->input('correo');
        $pass = $request->input('contrasena');
        
        //send this data to model and look what kind of user is...
        $correcto = User::where('correo','=',$mail)->get(['password','rol','id','name','pat','mat']);
        //echo "$correcto";
        if($correcto->isEmpty())
        {
            //corrreo no existe...mandamos alerta...
            //echo "$correcto";
            $errors = new MessageBag(['pass'=>['Usuario o contraseña incorrectos']]);
            return Redirect::back()->withErrors($errors);//->withInput(\Illuminate\Support\Facades\Input::except('pass'));
        }else{
            //Correo si existe...validamos pas
            if($correcto[0]->password != $pass){
                //echo $correcto."2";
                $errors = new MessageBag(['pass'=>['Usuario o contraseña incorrectos']]);
                return Redirect::back()->withErrors($errors);//->withInput(\Illuminate\Support\Facades\Input::except('pass'));                
            }else
            {
                //Salvar en sesion nombre...
                if ($request->session()->has('nombrecom')) {
                    $request->session()->forget('nombrecom');
                    $request->session()->flush();
                    
                    $request->session()->put('nombrecom', $correcto[0]->name.' '.$correcto[0]->pat.' '.$correcto[0]->mat);
                    $request->session()->put('iduser', $correcto[0]->id);
                }else{
                    $request->session()->put('nombrecom', $correcto[0]->name.' '.$correcto[0]->pat.' '.$correcto[0]->mat);
                    $request->session()->put('iduser', $correcto[0]->id);                    
                }
                
                if($correcto[0]->rol == "1"){
                    $request->session()->put('isAdmin',"1");
                    return view('indexAdmin');
                    //redirect();
                }else if($correcto[0]->rol == "3"){

                    //Aqui buscar todos los expedientes...
                    //siendo el profeesor, tiene la posibilis de revisar todo
                    //obtenesmo su id de la varible correcto
                    $iduser = $correcto[0]->id;
                    $request->session()->put('iduser',$iduser);
                    $request->session()->put('profesor',"1");

                    //recuoero datos del expeidnet con base al ide lde usuario...
                    $facturasCliente = DB::table('expediente')
                        ->join('alumnos','alumnos.id','=','expediente.id_alumno')
                        ->join('usuarios','usuarios.id','=','alumnos.id_usuario')
                	->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id','usuarios.name','usuarios.pat','expediente.status')
                        //->where('alumnos.id_usuario', '=', $iduser)
                        ->get();
                    
                    //$clinica = Expediente::where();
                    $datos['data'] = $facturasCliente;

                    //Launch view with exoeduente....solo los asociados al alumnos...no todos...
                    return view('Profesor.preprincipal',$datos);
                    //redirect();
                }else{
                    //Aqui buscar los expediente unicamente del doc...
                    //obtenesmo su id de la varible correcto
                    $iduser = $correcto[0]->id;
                    $request->session()->put('iduser',$iduser);

                    //recuoero datos del expeidnet con base al ide lde usuario...
                    $facturasCliente = DB::table('expediente')
                        ->join('alumnos','alumnos.id','=','expediente.id_alumno')
                	->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id','expediente.status')
                        ->where('alumnos.id_usuario', '=', $iduser)
                        ->get();
                    
                    //$clinica = Expediente::where();
                    $datos['data'] = $facturasCliente;

                    //Launch view with exoeduente....solo los asociados al alumnos...no todos...
                    return view('Alumno.preprincipal',$datos);
                }
            }
        }
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

    public function storeProfesor(Request $request)
    {
        //get data from view and validate it
        $this->validate($request, [
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'correo' => 'required',
            'pass' => 'required',
            'fecha' => 'required',
            'firmaelectronica' => 'required',
            'academico' => 'required'
        ]);
        
        //Save usuario firdt----thrn alumno        
        $articulo = new User;
	$articulo->name = $request->input('nombre');
	$articulo->pat = $request->input('paterno');
	$articulo->mat = $request->input('materno');
	$articulo->correo = $request->input('correo');
        $articulo->rol = 3;
        $articulo->password = $request->input('pass');
        $articulo->created_at = "0";
        $articulo->updated_at = "0";                
	$articulo->save();
        
        //Save now alumno
        //we are goint ti get the clinica from the form
        //status always 1 at beginnig
        $alum = new Profesor;
        $alum->matricula = "";
        $alum->grado = $request->input('academico');
        $alum->fecha = $request->input('fecha');
        $alum->firmaelec = $request->input('firmaelectronica');
        $alum->id_usuario = $articulo->id;
        $alum->clinica = 2;
        $alum->status = 1;
        $alum->save();
        
        $datos['usuarios'] = User::all();
        return view('Admin.buscar_usuario',$datos);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get data from view and validate it
        $this->validate($request, [
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'correo' => 'required',
            'pass' => 'required',
            'perfil' => 'required'
        ]);
        
        //Save usuario firdt----thrn alumno        
        $articulo = new User;
	$articulo->name = $request->input('nombre');
	$articulo->pat = $request->input('paterno');
	$articulo->mat = $request->input('materno');
	$articulo->correo = $request->input('correo');
        $articulo->rol = $request->input('perfil');
        $articulo->password = $request->input('pass');
        $articulo->direccion = $request->input('direccion');
        $articulo->telefono = $request->input('phone');
        $articulo->created_at = "0";
        $articulo->updated_at = "0";                
	$articulo->save();
        
        //Save now alumno
        //we are goint ti get the clinica from the form
        //status always 1 at beginnig
        if($request->input('perfil') == "2"){
            $alum = new Alumno;
            $alum->matricula = $request->input('matricula');
            $alum->id_usuario = $articulo->id;
            $alum->clinica = $request->input('clinica_selected');
            $alum->status = 1;
            $alum->save();
        }
        
        $datos['usuarios'] = User::all();
        return view('Admin.buscar_usuario',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //Get clinicas from model and show in view
        $datos['usuarios'] = User::all();
        return view ('Admin.buscar_usuario',$datos);
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
        $name = User::find($id);
        //receive more data...and avlidate...if is 2 | 3 delte first profe..alumno...
        $alumno = Alumno::where('id_usuario','=',$id)->get(['id']);
        if(count($alumno) > 0){
            //Eliminar alumno y usuario
            $affectedA = Alumno::where('id_usuario',$id)->delete();
            $affectedB = User::where('id',$id)->delete();
            
            /*
             * ojo...cuando eliminas un alumno... sus pacientes deben pasar a estatus 2
             */
            
            return $name->name;            
            
            
            
        }else
        {
            $profe = Profesor::where('id_usuario','=',$id)->get(['id']);
            if(count($profe) > 0){
            //Eliminar profesor y usuario
                $affectedA = Profesor::where('id_usuario',$id)->delete();
                $affectedB = User::where('id',$id)->delete();
                return $name->name;            

            }
            else{
                //No hya proge ni alumno...borra usuario directamnete
                $affectedB = User::where('id',$id)->delete();
                return $name->name;            
            }
        }
        
        /*$name = User::find($id);
        $affected = User::where('id',$id)->delete();
        if($affected > 0)
        {
            return $name->name;
        }else{
            return 0;
        }*/
    }
    
    public function cerrar(Request $request){
        
        //here we have to delete all the session variables :)
        if ($request->session()->has('folioexpediente')) {
            $request->session()->forget('folioexpediente');
            $request->session()->forget('paciente');
            $request->session()->forget('idexpediente');
            $request->session()->forget('iduser');
            $request->session()->flush();
        }
        
        return redirect('/');
    }
    
    public function getAlumnosData(Request $request){
        
        $idalumno = $request->session()->get('idalumnotemp','0');
                
        //$alumnos = Alumno::all();
        $alumno = DB::table('usuarios')
            ->join('alumnos','alumnos.id_usuario','=','usuarios.id')
            ->select('alumnos.id','usuarios.name','usuarios.pat','usuarios.mat')
            ->where('usuarios.rol', '=', '2')
            ->get();

        //$expedientes = Expediente::all();
        $datos['alumnos'] = $alumno;
        //$datos['expedientes'] = $expedientes;

        //return $alumnos;
        $datos['alumno_elegido'] = $idalumno;
                
        //get expedientes with id alumno
        $facturasCliente = DB::table('expediente')
            //->join('alumnos','alumnos.id','=','expediente.id_alumno')
            ->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id')
            ->where('expediente.id_alumno', '=', $idalumno)
            ->get();
        
        $datos['expedientes'] = $facturasCliente;
        
        return view('Admin.transferir_expediente_load',$datos);
    }
    
//**************Update transferir data***************************
    public function saveTransferir(Request $request){
        
        $estudiantA = $request->input('estudianteA');

        //get expedientes with id alumno
        $facturasCliente = DB::table('expediente')
            //->join('alumnos','alumnos.id','=','expediente.id_alumno')
            ->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.fecha_inicio','expediente.id')
            ->where('expediente.id_alumno', '=', $estudiantA)
            ->get();
        
        //read all the values from post form
        $i = 0;
        foreach ($facturasCliente as $value) {
            $idnuevo = $request->input('nuevo'.$i);
            if($idnuevo == "ninguno"){
                $i += 1;
                continue;
            }
            //echo "Valoe: ".$idnuevo."<br>";
            $folioexp = $value->folio_expediente;
            
            //update id_alumno in table expediente...
            $heredo = Expediente::where('folio_expediente','=',$folioexp)
                ->update(array(
                    "id_alumno" => $idnuevo
                ));
            
            $i += 1;
        }

        return redirect('/Buscar');
    }

//------------------------------------ contrasena cambio data ------------------    
    public function contrasena(){
        
        return view('Alumno.changepass');
    }
    public function contrasenaprofe(){
        
        return view('Profesor.changepass');
    }
    
    public function contrasenaStore(Request $request){
        
        //get data from form and user....
        $pass1 = $request->input('pass1');
        $pass2 = $request->input('pass2');
        $iduser= $request->session()->get('iduser','0');
        
        //send this data to model and look what kind of user is...
        $correcto = User::where('id','=',$iduser)->get(['password','rol','id','name','pat','mat']);
        //echo "$correcto";
        if($correcto->isEmpty())
        {
            //corrreo no existe...mandamos alerta...
            //echo "$correcto";
            $errors = new MessageBag(['pass'=>['Contraseña incorrecta']]);
            return Redirect::back()->withErrors($errors);//->withInput(\Illuminate\Support\Facades\Input::except('pass'));
        }else{
            //Correo si existe...validamos pas
            if($correcto[0]->password != $pass1){
                //echo $correcto."2";
                $errors = new MessageBag(['pass'=>['Contraseña incorrecta']]);
                return Redirect::back()->withErrors($errors);//->withInput(\Illuminate\Support\Facades\Input::except('pass'));                
            }else
            {
                //Salvar en sesion nombre...
                if ($request->session()->has('nombrecom')) {
                    $request->session()->forget('nombrecom');
                    $request->session()->flush();
                    
                    $request->session()->put('nombrecom', $correcto[0]->name.' '.$correcto[0]->pat.' '.$correcto[0]->mat);
                    $request->session()->put('iduser', $correcto[0]->id);
                }else{
                    $request->session()->put('nombrecom', $correcto[0]->name.' '.$correcto[0]->pat.' '.$correcto[0]->mat);
                    $request->session()->put('iduser', $correcto[0]->id);                    
                }
                
                //si el usuario si existe...ahora actualiza contraseña
                $heredo = User::where('id','=',$iduser)
                ->update(array(
                    "password" => $pass2
                ));
                
                $request->session()->put('iduser',$iduser);

                
                if($correcto[0]->rol == "1"){
                    $request->session()->put('isAdmin',"1");
                    return view('indexAdmin');
                    //redirect();
                }else if($correcto[0]->rol == "3"){

                    //Aqui buscar todos los expedientes...
                    //siendo el profeesor, tiene la posibilis de revisar todo
                    //obtenesmo su id de la varible correcto
                    $iduser = $correcto[0]->id;
                    $request->session()->put('iduser',$iduser);
                    $request->session()->put('profesor',"1");

                    //recuoero datos del expeidnet con base al ide lde usuario...
                    $facturasCliente = DB::table('expediente')
                        ->join('alumnos','alumnos.id','=','expediente.id_alumno')
                        ->join('usuarios','usuarios.id','=','alumnos.id_usuario')
                	->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id','usuarios.name','usuarios.pat','expediente.status')
                        //->where('alumnos.id_usuario', '=', $iduser)
                        ->get();
                    
                    //$clinica = Expediente::where();
                    $datos['data'] = $facturasCliente;

                    //Launch view with exoeduente....solo los asociados al alumnos...no todos...
                    return view('Profesor.preprincipal',$datos);
                    //redirect();
                }else{
                    //Aqui buscar los expediente unicamente del doc...
                    //obtenesmo su id de la varible correcto
                    $iduser = $correcto[0]->id;
                    $request->session()->put('iduser',$iduser);

                    //recuoero datos del expeidnet con base al ide lde usuario...
                    $facturasCliente = DB::table('expediente')
                        ->join('alumnos','alumnos.id','=','expediente.id_alumno')
                	->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id','expediente.status')
                        ->where('alumnos.id_usuario', '=', $iduser)
                        ->get();
                    
                    //$clinica = Expediente::where();
                    $datos['data'] = $facturasCliente;

                    //Launch view with exoeduente....solo los asociados al alumnos...no todos...
                    return view('Alumno.preprincipal',$datos);
                }
                
                //recuoero datos del expeidnet con base al ide lde usuario...
                /*$facturasCliente = DB::table('expediente')
                    ->join('alumnos','alumnos.id','=','expediente.id_alumno')
                    ->select('expediente.folio_expediente','expediente.nombre_paciente','expediente.ap_paterno','expediente.fecha_inicio','expediente.id','expediente.status')
                    ->where('alumnos.id_usuario', '=', $iduser)
                    ->get();

                //$clinica = Expediente::where();
                $datos['data'] = $facturasCliente;

                return view("Alumno.preprincipal",$datos);*/

            }
        }        
    }
}
