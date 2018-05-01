<!DOCTYPE HTML>
<html>
	<head>
		<title>EEMUD</title>
		<meta charset="utf-8" />
		
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="{{url::asset('/')}}assets/css/main.css" /> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
                <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
                <script type="text/javascript">
                    function inputs(){
                    
                        //get status from expediente...if equals to terminated, then block all the inputs
                        $.ajax({
                            type:'POST',
                            url:'{{url::asset('/')}}Expediente/validarStatus',
                            data:{'tipo':'fichadireccion'},
                            success:function(data){
                                if(data == 5){
                                    $('#form1 *').attr('readonly','readonly');
                                    $('#form1 *').attr('disabled','disabled');                                    
                                }
                            }
                        },10000);
                    }
                </script>
	</head>
        <body class="index" onload="inputs();">
		<div id="page-wrapper">
			<!-- Header -->
                        <header id="header" class="alt">					
                            <nav id="nav">
                                <ul>
                                    <li class="submenu">
                                    <li><a href="{{url::asset('/')}}Alumno" class="button special">Menú</a></li>
                                </ul>
                            </nav>
                        </header>

			<!-- Banner -->
				<section id="banner">
                                    <div class="inner">
                                    <!--Se edita desde esta zona-->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">Ficha de identificación</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Dirección</a></li>
                                        <li><a data-toggle="tab" href="#menu2">Datos del paciente</a></li>
                                        <li><a data-toggle="tab" href="#menu3">Información parentezco</a></li>
                                        <li><a data-toggle="tab" href="#menu4">Datos sobre consulta </a></li>
                                    </ul>

                                    <form id="form1" method="post" action="{{url::asset('/')}}Expediente/Alta/Ficha" enctype="multipart/form-data" accept-charset="UTF-8">
                                      <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                                <table border="0" align="center" class="default">
                                                <tr>
                                                    <td colspan="6"><h3>Ficha de identificación</h3></td>                                                           
                                                </tr>
						<tr>
                                                    <td>Nombre de la instituci&oacute;n:</td> <td><input type="text" name="Institucion" value="{{ $clinica }}" hidden="true" readonly="true"></td>
                                                    <td>Número de Expediente: </td> <td><input type="text" name="NumExpediente" value="{{ Session::get('folioexpediente') }}" readonly="true"></td>
                                                    <td>Fecha de inicio: </td> <td><input type="date" name="FechaInicio" value="{{ $fecha1 }}"></td>			
						</tr>
												
						<tr>
                                                    <td class="Separador" colspan="6"></td>
						</tr>									
						<tr>
                                                    <td>CURP:</td><td><input type="text" name="curp" value="{{ $expediente->curp }}"></td>	
                                                    <td>Fotografía: </td> <td><input type="file" name="fotografia" value="{{ $expediente->fotopath }}"></td> 	
                                                    <td <?php if($expediente->fotopath == null || $expediente->fotopath == ""){echo "style='display:none;'";}?>>
                                                        <img src="{{url::asset('/')}}{{ $expediente->fotopath }}" width="75px" height="100px" alt="Fotografía"></td> 	
						</tr>

						<tr>
                                                    <td class="Separador" colspan="6"></td>
						</tr>
												
						<tr>
                                                    <td><label>Número de Recibo de Expediente: </label></td>
                                                    <td><input type="text" name="NumReciboExpediente" value="{{$expediente->recibo_pago}}" disabled="true"></td>	
						</tr>

						<tr>
                                                    <td class="Separador" colspan="6"></td>
						</tr>						

                                                </table>
                                        </div>
                                          
                                        <div id="menu1" class="tab-pane fade">
                                                <table border="0" align="left" width='100%'>
                                                <tr>
                                                    <td colspan="6"><h3>Dirección</h3></td>                                                           
                                                </tr>

                                                <tr>
                                                    <td>Calle:</td>
                                                    <td>
                                                        <input type="text" name="CalleNum" value="{{ $direccion[0]->calle or ''}}">
                                                    </td>
                                                    <td>Número:</td>
                                                    <td><input type="text" name="numerohouse" value="{{ $direccion[0]->numero or ''}}"></td>	
                                                    <td>Código Postal:</td>
                                                    <td><input type="text" name="CodPostal" value="{{ $direccion[0]->codigopostal or ''}}"></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="Separador" colspan="6"></td>	
							</tr>
							<tr>
								<td> Colonia </td> <td><input type="text" name="Colonia" value="{{ $direccion[0]->colonia or ''}}"></td>	
								<td>Delegaci&oacute;n o Municipio: </td><td><input type="text" name="Municipio" value="{{ $direccion[0]->delegacion or ''}}"></td>	
								<td>Entidad:</td>
                                                                <td>
                                                                    {!! Form::select('estado',[
                                                                        'Aguascalientes' => 'Aguascalientes',
                                                                        'Baja California' => 'Baja California',
                                                                        'Baja California Sur' => 'Baja California Sur',
                                                                        'Campeche' => 'Campeche',
                                                                        'Colima' => 'Colima',
                                                                        'Chiapas' => 'Chiapas',
                                                                        'Coahuila' => 'Coahuila',
                                                                        'Chiahuahua' => 'Chiahuahua',
                                                                        'CDMX' => 'CDMX',
                                                                        'Durango' => 'Durango',
                                                                        'Guanajuato' => 'Guanajuato',
                                                                        'Guerrero' => 'Guerrero',
                                                                        'Hidalgo' => 'Hidalgo',
                                                                        'Jalisco' => 'Jalisco',
                                                                        'México' => 'México',
                                                                        'Michoacán' => 'Michoacán',
                                                                        'Morelos' => 'Morelos',
                                                                        'Nayarit' => 'Nayarit',
                                                                        'Nuevo León' => 'Nuevo León',
                                                                        'Oaxaca' => 'Oaxaca',
                                                                        'Puebla' => 'Puebla',
                                                                        'Querétaro' => 'Querétaro',
                                                                        'Quintana Roo' => 'Quintana Roo',
                                                                        'San Luis Potosí' => 'San Luis Potosí',
                                                                        'Sinaloa' => 'Sinaloa',
                                                                        'Sonora' => 'Sonora',
                                                                        'Tabasco' => 'Tabasco',
                                                                        'Tamaulipas' => 'Tamaulipas',
                                                                        'Tlaxcala' => 'Tlaxcala',
                                                                        'Veracruz' => 'Veracruz',
                                                                        'Yucatán' => 'Yucatán',
                                                                        'Zacatecas' => 'Zacatecas'                                                                        
                                                                    ],$direccion[0]->entidad) !!}
                                                                 
                                                                </td>	
							</tr>

							<tr>
								<td class="Separador" colspan="6"></td>	
							</tr>

							<tr>
								<td>Teléfono: </td>	<td><input type="text" name="Telefono" value="{{ $direccion[0]->telefono or ""}}"></td>	
								<td>Institución de DerechoHabiencia:</td> 
                                                                <td>
                                                                    {!! Form::select('institucion',[
                                                                        'Ninguno' => 'Ninguno',
                                                                        'IMSS' => 'IMSS',
                                                                        'ISSEMYM' => 'ISSEMYM',
                                                                        'ISSFAM' => 'ISSFAM',
                                                                        'ISSSTE' => 'ISSSTE',
                                                                        'PEMEX' => 'PEMEX',
                                                                        'SEGURO POPULAR' => 'SEGURO POPULAR',
                                                                        'SSA' => 'SSA'
                                                                    ],$direccion[0]->idh)
                                                                    !!}
                                                                
                                                                </td>
							</tr>
							
							<tr>
                                                            <td class="Separador" colspan="6"></td>
							</tr>
                                            </table>
                                                        
                                        </div>

                                        <div id="menu2" class="tab-pane fade">
                                                <table border="0" align="center" class="default">
                                            <tr>
                                                    <td colspan="6"><h3>Datos del Paciente</h3></td>
						</tr>
						<tr>
                                                    <td>Apellido Paterno: </td> <td><input type="text" name="APat" value="{{$expediente->ap_paterno}}" disabled="true"></td>	
                                                    <td>Apellido Materno: </td> <td><input type="text" name="AMat" value="{{$expediente->ap_materno}}" disabled="true"></td>
                                                    <td>Nombre(s): </td>  <td><input type="text" name="Nombre" value="{{$expediente->nombre_paciente}}" disabled="true"></td>	
						</tr>

						<tr>
                                                    <td class="Separador" colspan="6"></td>
						</tr>

							<tr>
								<td>Género:</td> <td><select name="GeneroPaciente" disabled="true" readonly="false">
                                                                @if($expediente->genero == 'masculino')
                                                                        <option value="Masculino" selected="true">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                @else                                                                
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino" selected="true">Femenino</option>
                                                                @endif
                                                                </select></td>	
                                                                
								<td>Ocupación: </td> <td><input type="text" name="Ocupacion" value='{{$expediente->ocupacion}}'></td>
								<td>Escolaridad: </td> 
                                                                <td>
                                                                    {!! Form::select('escolaridad',[
                                                                        'Pre-escolar',
                                                                        'Primaria',
                                                                        'Secundaria',
                                                                        'Preparatoria',
                                                                        'Licenciatura',
                                                                        'Posgrado'
                                                                    ],$expediente->escolaridad) !!}                                                                
                                                                </td>		
							</tr>

							<tr>
								<td class="Separador" colspan="6"></td>
							</tr>
							<tr>
								<td>Estado Civil:</td>
                                                                <td>
                                                                    {!! Form::select('edoCivil',[
                                                                        'Soltero' => 'Soltero',
                                                                        'Casado' => 'Casado',
                                                                        'Viudo' => 'Viudo',
                                                                        'Divorciado' => 'Divorciado',
                                                                        'Union Libre' => 'Union Libre',
                                                                        'Otro' => 'Otro'
                                                                    ],$expediente->estadocivil) !!}
                
                                                                </td>	
								<td>Religi&oacute;n:</td> 
                                                                <td>
                                                                    {!! Form::select('Religion',[
                                                                        'Catolica' => 'Católica',
                                                                        'Cristiana' => 'Cristiana',
                                                                        'Mormona' => 'Mormona',
                                                                        'Budista' => 'Budista',
                                                                        'Otro' => 'Otro'
                                                                    ],$expediente->religion) !!}
                                                                   
                                                                </td>	
								<td>Edad: </td><td> <input type="text" name="Edad" value="{{$expediente->edad}}"></td>					
							</tr>
						
							<tr>
								<td class="Separador" colspan="6"></td>
							</tr>	

							<tr>
                                                            <td>Fecha de Nacimiento:</td><td><input type="date" name="FechaNac" value="{{ $fecha2 }}"></td>	
                                                            <td>Lugar de Nacimiento:</td>
                                                            <td>
                                                                {!! Form::select('lugarNac',[
                                                                        'Aguascalientes' => 'Aguascalientes',
                                                                        'Baja California' => 'Baja California',
                                                                        'Baja California Sur' => 'Baja California Sur',
                                                                        'Campeche' => 'Campeche',
                                                                        'Colima' => 'Colima',
                                                                        'Chiapas' => 'Chiapas',
                                                                        'Coahuila' => 'Coahuila',
                                                                        'Chiahuahua' => 'Chiahuahua',
                                                                        'CDMX' => 'CDMX',
                                                                        'Durango' => 'Durango',
                                                                        'Guanajuato' => 'Guanajuato',
                                                                        'Guerrero' => 'Guerrero',
                                                                        'Hidalgo' => 'Hidalgo',
                                                                        'Jalisco' => 'Jalisco',
                                                                        'México' => 'México',
                                                                        'Michoacán' => 'Michoacán',
                                                                        'Morelos' => 'Morelos',
                                                                        'Nayarit' => 'Nayarit',
                                                                        'Nuevo León' => 'Nuevo León',
                                                                        'Oaxaca' => 'Oaxaca',
                                                                        'Puebla' => 'Puebla',
                                                                        'Querétaro' => 'Querétaro',
                                                                        'Quintana Roo' => 'Quintana Roo',
                                                                        'San Luis Potosí' => 'San Luis Potosí',
                                                                        'Sinaloa' => 'Sinaloa',
                                                                        'Sonora' => 'Sonora',
                                                                        'Tabasco' => 'Tabasco',
                                                                        'Tamaulipas' => 'Tamaulipas',
                                                                        'Tlaxcala' => 'Tlaxcala',
                                                                        'Veracruz' => 'Veracruz',
                                                                        'Yucatán' => 'Yucatán',
                                                                        'Zacatecas' => 'Zacatecas'                                                                        
                                                                    ],$expediente->lugar_nacimiento) !!}                                                                
                                                            </td>	
							</tr>
						
							<tr>
                                                            <td class="Separador" colspan="6"></td>	
							</tr> 
                                                </table>                                            
                                        </div>
                                        
                                        <div id="menu3" class="tab-pane fade">

                                                <table border="0" align="center" class="default">
                                            <tr>
                                                    <td colspan="6"><h4>En el interrogatorio indirecto nombre y parentezco de la persona que proporciona información</h4></td>
							</tr>	

							<tr>
                                                            <td>Apellido Paterno: </td> <td><input type="text" name="APat" value="{{ $responsable[0]->paterno or ''}}"></td>
                                                            <td>Apellido Materno: </td> <td><input type="text" name="AMat" value="{{ $responsable[0]->materno or ''}}"></td>		
                                                            <td>Nombre(s): </td>  <td><input type="text" name="Nombre" value="{{ $responsable[0]->nombre or ''}}"></td>	
							</tr>

							<tr>
								<td class="Separador" colspan="6"></td>
							</tr>

							<tr>
								<td>En caso necesario comunicarse al Tel:</td><td><input type="text" name="TelAux" value="{{ $responsable[0]->telefono or ''}}"></td>	
							</tr>

                                        </table>
                                        </div>
                                          
                                          <div id="menu4" class="tab-pane fade">
                                                <table border="0" align="center" class="default" width='100%'>
                                                    <tr></tr>
                                                    <tr>
                                                    <td colspan="6"><h3>Datos Sobre Consulta </h3></td>									
                                                    </tr>
                                                    <tr>
                                                            <td width='33%'>Motivo de Consulta:</td>
                                                            <td width='33%'>Nota de ingreso del paciente:</td>
                                                            <td width='33%'>Alerta sobre alguna alergia:</td>
                                                    </tr>

                                                    <tr>
                                                        <td width='33%'><textarea name="MotivoCons" rows="6" cols="30">{{ $datosconsulta[0]->motivo or ''}}</textarea></td>									
                                                        <td width='33%'><textarea name="Notaingreso" rows="6" cols="30">{{ $datosconsulta[0]->nota_ingreso or ''}}</textarea></td>									
                                                        <td width='33%'><textarea name="Alertaalergia" rows="6" cols="30">{{ $datosconsulta[0]->alergia or ''}}</textarea></td>		
                                                    </tr>

                                                    <tr>
                                                            <td class="Separador" colspan="6"></td>
                                                    </tr>
                                                </table>
                                              <table border="0" align="center" class="default" width='100%'>

                                                    <tr>
                                                    <td colspan="6"><h3>Somatometria y Signos Vitales</h3></td>									
                                                    </tr>

                                                    <tr>
                                                            <!--td >Somatria y Signos Vitales: </td--> 
                                                            <!--td><input type="text" hidden="true" name="signosvilates" value="{{ $datosconsulta[0]->somatria or ''}}"></td-->			     
                                                            <td width='25%'>Estatura: </td> 
                                                            <td width='25%'><input type="text" name="Estatura" value="{{ $datosconsulta[0]->estatura or ''}}"> Mts.</td>	
                                                            <td width='25%'>Peso:</td> 
                                                            <td width='25%'><input type="text" name="Peso" value="{{ $datosconsulta[0]->peso or ''}}">Kg</td>
                                                    </tr>

                                                    <tr>
                                                            <td class="Separador" colspan="6"></td>
                                                    </tr>

                                                    <tr>
                                                        <td width='13%'>FC:</td>
                                                        <td width='20%'><input type="text" name="Pulso" value="{{ $datosconsulta[0]->pulso or ''}}">pulso</td>						
                                                        <td width='13%'>Frecuencia Respiratoria: </td>
                                                        <td width='20%'><input type="text" name="FrecResp" value="{{ $datosconsulta[0]->frecuencia or ''}}">rpm</td>	
                                                        <td width='13%'>Tensión Arterial: </td> 
                                                        <td width='20%'><input type="text" name="Tensionarterial" value="{{ $datosconsulta[0]->tension or ''}}">mm/Hg</td>									
                                                    </tr>

                                                    <tr>
                                                            <td class="Separador" colspan="6"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Temperatura Axilar:</td><td><input type="text" name="Temperatura" value="{{ $datosconsulta[0]->temperatura or ''}}">°C</td>					
                                                        <td>Grupo Sanguineo:</td><td><input type="text" name="Sanguineo" value="{{ $datosconsulta[0]->sanguineo or ''}}"></td>								
                                                    </tr>

                                                    <tr>
                                                            <td class="Separador" colspan="6"></td>
                                                    </tr>

                                                    <tr <?php if($expediente->profe_observa == NULL){echo "style='display: none;'";}else{echo "style='display: table-row;'";}?>>
                                                        <td colspan="3"><label>Observaciones profesor:</label></td>
                                                        <td><textarea class="tam" name="observaprofesor" rows="6" cols="3" style="background: rgba(100, 100, 100, 0.8)" disabled="true">{{$expediente->profe_observa}}</textarea>
                                                    </tr>
							<tr>
								<td class="Separador" colspan="6"></td>
							</tr>

							<tr>
                                                            <td colspan="6"><input type="submit" value="Guardar Datos" align="center"></td>									
							</tr>
	                                              </table>
                                          </div>   
                                      </div>
                                    </form>
                                    </div>
                                    <!--/form-->	
				<!--Se ternina de editar aqui-->
                		</section> 
                            </div>

			<!-- Main -->

			<!-- CTA -->
				

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Copyright 2015</li><li><strong>CAROLVE SYSTEMS S.A de C.V</strong></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
            <?php
                echo $scrip;
            ?>

	</body>
</html>