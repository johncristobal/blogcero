<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="{{URL::asset('assets/css/pdf.css')}}">
  
    
    <title>ConsentimientoInformado</title>
  
  
  </head>
  
  <body>   
      <div id="cabecera_receta">
        <div id="logo">
          <img src="{{URL::asset('assets/css/images/logo.jpg')}}" width="100" height="100" >
        </div>

        <div id="informacion">
          <h2 class="letra">Universidad Privada Del Edo de México</h2>
          <p class="letra">Av. Revolución No 46, Centro, CP 55000 Ecatepec de Morelos, Méx.</p>
          <p class="letra">Teléfono: 01 55 5770 4218</p>
        </div>

        
      </div>
    <div id="Cuerpo_Receta">
      
      <h2 class="letra" align="center">Consentimiento Informado</h2>
      <br>      
        <p class="letra">A través del presente, declaro y manifiesto, en pleno uso de mis facultades mentales que he sido informado/a 
          y comprendo la necesidad y fines de ser atendido/a para restaurar total o parcialmente según las necesidades.
        </p>
        <p class="letra">
          He sido informado/a de las alternativas posibles del tratamiento, al igual comprendo la necesidad de realizar,
         si es preciso, tratamientos remitidos con alguna interconsulta, tanto de carácter médico y quirúrgicos, incluyendo el uso 
           de anestesia local; siempre que el tratamiento lo amerite y bajo la atención del responsable y mínimo un 
           asistente.</p>
        <p class="letra">   
          Comprendo los posibles riesgos y complicaciones explicados con anterioridad, involucradas en los tratamientos y comprendo 
          también que no es una ciencia exacta, por lo que no existen garantías sobre el resultado exacto de los tratamientos 
          proyectados. Además de esta información que he recibido, será informado/a en cada momento y a mi requerimiento de la 
          evolución de mi proceso de  cada uno de los tratamientos, de manera verbal y/o escrita.</p>
        <p class="letra">  
          Si surgiese cualquier situación inesperada o sobrevenida durante la intervención o tratamiento, autorizo al responsable a realizar
          cualquier procedimiento o maniobra distinta de las proyectadas o usuales que a su juicio estimase oportuna para la resolución 
          teniendo siempre una justificación.
        </p>
        <p class="letra"> 
          Me ha sido explicado/a que para la realización del tratamiento es imprescindible mi colaboración, siendo así que su omisión 
          puede provocar resultados distintos a los esperados en la o las rehabilitaciones.
        </p>
        <p class="letra">
          Doy mi consentimiento y por ende al equipo de ayudantes que se designe según el tratamiento lo requiera.</p>
        </p>      
  </div>

   <div class="Separador">
    </div>

    <div id="firma">
      <table align="center" border="0">
        <tr>
            <td class="firm">_____________________</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">_____________________</td>            
        </tr>
        <tr>
            <td class="firm">{{$paciente}}</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">{{$doctor}}</td>            
        </tr>
        <tr>
            <td class="firm">Paciente</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">Doctor</td>            
        </tr>
        <tr>
          <td colspan="3"class="Separador"></td>
        </tr>
        <tr>
            <td class="firm">_____________________</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">_____________________</td>            
        </tr>
        <tr>
            <td class="firm">{{$testigo1}}</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">{{$testigo2}}</td>            
        </tr>
        <tr>
            <td class="firm">Testigo 1</td>
            <td class="firm">&nbsp;</td>
            <td class="firm">Testigo 2</td>            
        </tr>
      </table>
    </div>
      

   

    <div class="footerCons">
      <h4>Fecha de emisión: {{" ".$date}}</h4>
    </div>

  </body>
</html>