<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="{{URL::asset('assets/css/pdf.css')}}">
  
    
    <title>Receta</title>
  
  
  </head>
  
  <body>   
      <div id="cabecera_receta">
        <div id="logo">
          <img src="{{URL::asset('assets/css/images/logo.jpg')}}" width="100" height="100" >
        </div>

        <div id="informacion">
          <h3 class="letra">{{$invoice}}</h3>
          <h5 class="letra">Dr {{$n_doc}} </h5>
          <p class="dir">Direcci&oacute;n: {{$usuario->direccion}}.</p>
          <p class="dir">Tel&eacute;fono: {{$usuario->telefono}},&nbsp;&nbsp;C&eacute;dula Profesional: {{$alumno->matricula}} </p>
         
        </div>

        <div id="folio">
          <h6 class="letra">Folio No: {{$id_rec}}</h6> <!--Recupera informacion de la variable id_rec-->
        </div>

      </div>
    <div id="Cuerpo_Receta">
      <div id="datos">
        <fieldset>
          <legend>Datos personales</legend>
          <table border="0" align="center">        
          <tr>
            <td class="">Nombre del paciente: </td>
            <td colspan="18" class="">{{$name }}</td> <!--obtiene el nombre desde el controlador con la variable $name-->
          </tr>
          <!--Se opbtienen los datos del paciente desde la base de datos-->
          <tr>
            <td colspan="">Edad: {{$expediente->edad}} años</td>                                  
            <td class="">T.A.:</td>
            <td class="">{{$consulta->tension}}</td>
            <td class=""></td> 
            <td class="">F.C.:</td>
            <td class="">{{$consulta->frecuencia}}</td>
            <td class=""></td> 
            <td class="">Kg:</td>
            <td class="">{{$consulta->peso}}</td>
            <td class=""></td> 
            <td class=""> °C:</td>
            <td class=""> {{$consulta->temperatura}}</td>
          </tr> 
        </table>
        </fieldset>

       <!--Se obtienen los datos recuperados del formulario-->
       <div id="atenc">
       <fieldset>
        <legend>Área de atención</legend>                   
          <textarea class="area" rows="10" cols="20">{{$areaA}}</textarea>
        </fieldset>
        </div>

        <div id="preesc">
       <fieldset>
        <legend>Preescripción uno</legend>                   
          <textarea class="area" rows="50" cols="450">{{$preesc}}</textarea>
        </fieldset>
        </div>

        <div id="ind">
       <fieldset>
        <legend>Preescripción dos</legend>                   
          <textarea class="area" rows="50" cols="450">{{$ind}}</textarea>
        </fieldset>
        </div>

        <div id="obs">
       <fieldset>
        <legend>Preescripción tres</legend>                   
          <textarea class="area" rows="50" cols="450">{{$observ}}</textarea>
        </fieldset>
        </div>

      

       <div id="footer">
       <fieldset>       
       <legend>Datos </legend>
          <label>C.D.:_________________________</label>
          <label>C.D.:_________________________</label>
          <label>Fecha de Emisión: {{" ".$date}}</label>
        </fieldset>
        </div>
      </div>
    </div>    
  </body>
</html>