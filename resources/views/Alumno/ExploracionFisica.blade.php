<!DOCTYPE HTML>
<html>
	<head>
		<title>EEMUD</title>
		<meta charset="utf-8" />
		
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{url::asset('/')}}assets/css/main.css" /> 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<script type="text/javascript">
                    function inputs(){
                    
                        //get status from expediente...if equals to terminated, then block all the inputs
                        $.ajax({
                            type:'POST',
                            url:'{{url::asset('/')}}Expediente/validarStatus',
                            data:{'tipo':'fisica'},
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
					<h2>Exploración Física</h2>
			
                                        <form method="post" action="{{url::asset('/')}}Expediente/Alta/Fisica" id="form1">
				<table align="center" border="0" class="default">
				<tr>
					<td><label>Frenillo Labial</label></td>
                                        <td><textarea rows="3" cols="40"class="form" name="frenillo">{{ $frenillo }}</textarea></td>
				</tr>
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
				<tr>
					<td><label>Lengua</label></td>
					<td><textarea rows="3" cols="40" class="form" name="lengua">{{ $lengua }}</textarea></td>
				</tr>
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
				<tr>
					<td><label>Frenillo Lingual</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="lingual">{{ $lingual }}</textarea></td>
				</tr>
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
				<tr>
					<td><label>Encías</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="encias">{{ $encias }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Paladar Duro</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="paduro">{{ $paduro }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Paladar Blando</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="pablando">{{ $pablando }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
			
				<tr>
					<td><label>Procesos Alveolares</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="alveorales">{{ $alveorales }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Orofaringe</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="faringe"> {{ $faringe }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Piso de boca</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="boca"> {{ $boca }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Glándulas Salivales</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="salival">{{ $salival }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
				
				<tr>
					<td><label>Carrillos</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="carrillos"> {{ $carrillos }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Región Yugal</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="yugal"> {{ $yugal }}</textarea></td>
				</tr>
				
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
			
				<tr>
					<td colspan="2"><h3>HALLAZGOS  RADIOLÓGICOS Y DE LABORATORIO CLÍNICO</h3></td>
					
				</tr>

				<tr>
					<td><label>¿Cuales?</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="hallazgos"> {{ $hallazgos }}</textarea></td>
					
				</tr>
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Observaciones</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="observaciones"> {{ $observaciones }}</textarea></td>
					
				</tr>
				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

                                <tr <?php if($observaprofe == NULL){echo "style='display: none;'";}else{echo "style='display: table-row;'";}?>>

                                    <td><label>Observaciones profesor:</label></td>
                                    <td><textarea class="tam" name="observaprofesor" rows="6" cols="3" style="background: rgba(100, 100, 100, 0.8)" disabled="true">{{$observaprofe}}</textarea>
                                </tr>
                                
				<tr>
					<td colspan="2"></br></td>
				</tr>
º
				<tr>
					<td colspan="2"><input type="submit" value="Guardar datos"></td>
				</tr>	

			</table>
			</form>
			
				<!--Se ternina de editar aqui-->
			</div> 
		</section> 

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




