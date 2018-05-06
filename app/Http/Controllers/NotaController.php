<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notaevolucion;
use App\Expediente;
use App\Profesor;

class NotaController extends Controller
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
        //
    }

/************************metodos de cada expediente********************/
/************************Notas/Nueva********************/
    public function NuevaNota(Request $request){
        $id = $request->session()->get('idexpediente','0');

        //$data = Notaevolucion::where('folio_expediente','=',$id)->get();
        $expediente = Expediente::find($id);

        $datos['fecha'] = "0000-00-00";
        $datos['referencia'] = "";
        $datos['contraref'] = "";
        $datos['nota'] = "";
                
        $datos['nombre'] = $expediente->nombre_paciente." ".$expediente->ap_paterno." ".$expediente->ap_materno;
        $datos['edad'] = $expediente->edad;
        $datos['genero'] = $expediente->genero;
        $datos['num'] = $expediente->folio_expediente;
        return view ('Alumno.Nota_Evolucion',$datos);           
    }        

/****************Notas/Update/Nota********************************/
    public function UpdateNota(Request $request){
        
        //recupera ide expediente
        $id = $request->session()->get('idexpediente','0');
        $idnota = $request->session()->get('idnota','0');


        //save dato in the right place....;
        $heredo = Notaevolucion::where('id','=',$idnota)
            ->update(array(
                "fecha" => $request->input('fecha'),
                "referencia" => $request->input('ref'),
                "contraref" => $request->input('contra'),
                "nota" => $request->input('nota')
            ));

        $this->actualizaExpedienteStatus($id);

        return redirect('/Nota/notas');        
    }
    
/************************metodos de cada expediente********************/
/************************store/load lista con notas********************/
    public function Nota(Request $request){
        
        //recuperra ide expedinte
        $id = $request->session()->get('idexpediente','0');

        //get all the notas 
        //show list con notass
        //en cada una tendra su clic para ver detalles (usando la functino de Nota)
        //Agregar boton para agregar nota jaja

        $data = Notaevolucion::where('folio_expediente','=',$id)->get();

        $arrayt = array();
        
        foreach ($data as $value) {

            $datos['fecha'] = explode(" ",$value->fecha)[0];
            $datos['idnota'] = $value->id;
            $datos['referencia'] = $value->referencia;
            $datos['contraref'] = $value->contraref;
            $datos['nota'] = $value->nota;            
            $datos['status'] = $value->status;            
            $datos['observacionesprofe'] = $value->observa_profe;            
            
            array_push($arrayt,$datos);            
        }

        $finalr['data'] = $arrayt;               

        return view ('Alumno.principalnotas',$finalr);        
    }

/************************metodos de cada expediente profesor********************/
/************************store/load lista con notas********************/
    public function Notaprofesor(Request $request){
        
        //recuperra ide expedinte
        $id = $request->session()->get('idexpediente','0');
        $idadmin = $request->session()->get('isAdmin','0');

        //get all the notas 
        //show list con notass
        //en cada una tendra su clic para ver detalles (usando la functino de Nota)
        //Agregar boton para agregar nota jaja

        $data = Notaevolucion::where('folio_expediente','=',$id)->get();
        $expediente = Expediente::find($id);

        $arrayt = array();
        
        foreach ($data as $value) {

            $datos['fecha'] = explode(" ",$value->fecha)[0];
            $datos['idnota'] = $value->id;
            $datos['referencia'] = $value->referencia;
            $datos['contraref'] = $value->contraref;
            $datos['nota'] = $value->nota;            
            $datos['status'] = $value->status;            
            $datos['observacionesprofe'] = $value->observa_profe;            
            
            array_push($arrayt,$datos);            
        }

        $finalr['data'] = $arrayt;

        if($idadmin == "1"){
        return view ('Admin.principalnotas',$finalr);  
            
        }else{
        return view ('Profesor.principalnotas',$finalr);  
        }
    }
    
    
    /*
     * Guardar id en sesion y redirgir a principal vuew
     * Notas/verprincipal
     */
    public function guardarid(Request $request,$id){
        //Guardar en seions este id...
        //regreso a principal
        //Salvar en sesion nombre...
        //$folio = Notaevolucion::where('id','=',$id)->get();
        $completo = "";
        $idsss = "";
        $idexped = "";
        $isadmin = "";
        
        if($request->session()->has(('nombrecom'))){
            $completo = $request->session()->get('nombrecom');
            $idsss = $request->session()->get('iduser');
            $idexped = $request->session()->get('idexpediente');
            $isadmin = $request->session()->get('isAdmin');
        }
        
        if ($request->session()->has('idexpediente')) {
            $request->session()->forget('folioexpediente');
            $request->session()->forget('paciente');
            $request->session()->forget('idexpediente');
            $request->session()->flush();

            $request->session()->put('idexpediente', $idexped);
            $request->session()->put('nombrecom', $completo);
            $request->session()->put('iduser', $idsss);
            $request->session()->put('idnota', $id);
            $request->session()->put('isAdmin', $isadmin);
        }else{
            $request->session()->put('idexpediente', $idexped);
            $request->session()->put('nombrecom', $completo);
            $request->session()->put('idnota', $id);
            $request->session()->put('iduser', $idsss);
            $request->session()->put('isAdmin', $isadmin);
        }
        return $id;
    }
    
    public function loadimagen(Request $request){
        //return $request->input('id');
        $archivo = $request->input('id');
        
        $file = \File::get($archivo);
        $response = \Response::make($file, 200);
        // using this will allow you to do some checks on it (if pdf/docx/doc/xls/xlsx)
        $response->header('Content-Type', 'application/png');
        //$response->header('Content-Disposition', 'inline; filename="'.$file.'""');

        return $response;
    }
    
/*********************/
/*********Notas/principal************/    
    public function vernota(Request $request){
                
        //recuperra ide expedinte
        $id = $request->session()->get('idexpediente','0');
        $idnota = $request->session()->get('idnota','0');

        //get dat afrom table patologico...
        //it's a valur with comas...
        //lets make split and get data
        //all in an array,,,like the one before
        
        $data = Notaevolucion::find($idnota);
        $expediente = Expediente::find($id);

        $datos['fecha'] = explode(" ",$data->fecha)[0];
        $datos['referencia'] = $data->referencia;
        $datos['contraref'] = $data->contraref;
        $datos['nota'] = $data->nota;
        $datos['status'] = $data->status;            
        $datos['observacionesprofe'] = $data->observa_profe;            
        
        $datos['nombre'] = $expediente->nombre_paciente." ".$expediente->ap_paterno." ".$expediente->ap_materno;        
        $datos['edad'] = $expediente->edad;        
        $datos['genero'] = $expediente->genero;        
        $datos['num'] = $expediente->folio_expediente; 
        
        return view ('Alumno.Nota_Evolucion_Deta',$datos);
    }
    
/*********************/
/********Profesor/Notas/principal*************/    
    public function vernotaprofesor(Request $request){
                
        //recuperra ide expedinte
        $id = $request->session()->get('idexpediente','0');
        $idnota = $request->session()->get('idnota','0');

        //get dat afrom table patologico...
        //it's a valur with comas...
        //lets make split and get data
        //all in an array,,,like the one before
        
        $data = Notaevolucion::find($idnota);
        $expediente = Expediente::find($id);

        $datos['fecha'] = explode(" ",$data->fecha)[0];
        $datos['referencia'] = $data->referencia;
        $datos['contraref'] = $data->contraref;
        $datos['nota'] = $data->nota;
        $datos['status'] = $data->status;            
        $datos['observacionesprofe'] = $data->observa_profe;
                
        $datos['nombre'] = $expediente->nombre_paciente." ".$expediente->ap_paterno." ".$expediente->ap_materno;        
        $datos['edad'] = $expediente->edad;        
        $datos['genero'] = $expediente->genero;        
        $datos['num'] = $expediente->folio_expediente; 
        
        return view ('Profesor.Nota_Evolucion_Deta',$datos);        
    }

//guardo observaciones profe,...    
    public function salvarobservaciones(Request $request){
        
        $observa = $request->input('observaprofe');
        $idnota = $request->session()->get('idnota');
                
        $data = Notaevolucion::where('id','=',$idnota)->update(array(
            "observa_profe" => $observa,
            "status" => 4
        ));

        $id = $request->session()->get('idexpediente','0');

        //get all the notas 
        //show list con notass
        //en cada una tendra su clic para ver detalles (usando la functino de Nota)
        //Agregar boton para agregar nota jaja

        $data = Notaevolucion::where('folio_expediente','=',$id)->get();
        $expediente = Expediente::find($id);

        $arrayt = array();
        
        foreach ($data as $value) {

            $datos['fecha'] = explode(" ",$value->fecha)[0];
            $datos['idnota'] = $value->id;
            $datos['referencia'] = $value->referencia;
            $datos['contraref'] = $value->contraref;
            $datos['nota'] = $value->nota;            
            $datos['status'] = $value->status;            
            $datos['observacionesprofe'] = $value->observa_profe;
            
            array_push($arrayt,$datos);            
        }

        $finalr['data'] = $arrayt;
        
        return view ('Profesor.principalnotas',$finalr);                
    }
    
    //Profesor/Nota/validarnota
    public function validarNotaF(Request $request){
        
        $idnota = $request->session()->get('idnota','0');
        $dats = Notaevolucion::where('id','=',$idnota)->update(array(
                'observa_profe' => $request->input('obs')
        ));
        
        
        //echo $request->input('observaprofe');
        //echo $idnota;
    }
    
    public function firmarnota(){
        return view ('Profesor.firmarnota');                        
    }
    
    public function firmarguardar(Request $request){
                
        //recuperra ide expedinte
        //$id = $request->session()->get('idexpediente','0');
        $idnota = $request->session()->get('idnota','0');

        $firma = $request->input('firma');

        $idsss = $request->session()->get('iduser');
        //return $idsss;
        
        $firmadoc = Profesor::where('id_usuario','=',$idsss)->get(['firmaelec']);

        if($firmadoc[0]->firmaelec != $firma){
            return 0;           
        }
        else{
            $dats = Notaevolucion::where('id','=',$idnota)->update(array(
                'status' => 5,
                'firma_profe' => $firma
            ));
            return 1;
        }
        
        return 0;
    }

/******Profesor/Nota/validarStatus********/    
    public function fchecar(Request $request){
        //recuperra ide expedinte
        $id = $request->session()->get('idexpediente','0');
        $tipo = $request->input('tipo');
        $idnota = $request->session()->get('idnota');

        //return $tipo;
        if($tipo == "nota"){
            $data = Notaevolucion::where('id','=',$idnota)->get();
            return $data[0]->status;
        }
    }    

/************************Actualzia expediente a 4********************/
/************************store/load ficha patologicos********************/
    public function actualizaExpedienteStatus($id){
        //session variable to store data
        //$id = $request->session()->get('idexpediente','0');
        $nada = Expediente::where('id','=',$id)->update(array(
            "status" => 1,
        ));
    }
}
