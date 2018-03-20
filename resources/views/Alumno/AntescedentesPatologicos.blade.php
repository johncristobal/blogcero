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
                            data:{'tipo':'patologicos'},
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
					<h2>Antecedentes Personales Patológicos</h2>
								
					<h4>Enfermedades</h4>

                                        <!--Ahora a guardar...****-->
                                        <form method="post" action="{{url::asset('/')}}Expediente/Alta/Patologico" id="form1">
						<table border="0" align="left" class="default" >
						<?php 
                                                    $enfermedades = ["Varicela","Rubeola","Sarampion","Parotiditis","Tosferina","Escarlatina","Parasitosis","Hepatitis","Sida","Asma","Disf Endocrinas","Hipertensión","Cáncer","ETS","Epilepsias","Amigdalitis de Repeticion","Tuberculosis","Fiebre Reumatica","Diabetes","Enf cardiovasculares","Artritis","Traumatismo c/sec","Int Quirurgicas","Transf Sangu","Alergias"];
                                                    $enfermedadesshow = ["Varicela","Rubeola","Sarampión","Parotidítis","Tosferina","Escarlatina","Parasitósis","Hepatítis","Sida","Asma","Disfunciones Endócrinas","Hipertensión","Cáncer","Enfermedades de Transmisión Sexual","Epilepsia","Amigdalitis de Repetición","Tuberculósis","Fiebre Reumática","Diabetes","Enfermedades Cardiovasculares","Artrítis","Traumatismo con Secuelas","Intervenciones Quirúrgicas","Transfusiones Sanguíneas","Alergias"];
                                                    $i =0;
                                                    $x =0;
                                                    foreach ($enfermedades as $value) { 
                                                        if($i==0){ ?>
                                                        <tr>
                                                        <?php } ?>
                                                            <td>
                                                        <?php
                                                            //get the union of words...
                                                            $newstring = str_replace(" ", "", $value);
                                                            if((isset($variable[$newstring])) && ($variable[$newstring] != "")){ ?>    
                                                                <label class="alineacion align-left"><?= $enfermedadesshow[$x]; ?></label><input type="checkbox" name="<?= $newstring; ?>" checked="true">
                                                        <?php }else{ ?>
                                                                <label class="alineacion align-left"><?= $enfermedadesshow[$x]; ?></label><input type="checkbox" name="<?= $newstring; ?>">
                                                        <?php                                                 
                                                            }
                                                            $i += 1;
                                                            if($i==5){
                                                                $i = 0;?>                                                        
                                                            </tr>  
                                                            <tr>
                                                                <td class="Separador" colspan="5"></td>
                                                            </tr>

                                                <?php
                                                        }
                                                        $x+=1;
                                                    }
                                                ?>
                                                                                                                    
                                                <!--tr>
							<td><label class="alineacion">Varicela</label><input type="checkbox" name="pasa" value="X"></td>
							<td><label class="alineacion">Rubeola</label><input type="checkbox" name="pasa" value="X"></td>
							<td>Sarampion<input type="checkbox" name="pasa" value="X"></td>
							<td>Parotiditis<input type="checkbox" name="pasa" value="X"></td>
							<td>Tosferina<input type="checkbox" name="pasa" value="X"></td>
						</tr>
						<tr>
							<td class="Separador" colspan="5"></td>
						</tr>
						
						<tr>	
							<td><label class="alineacion">Escarlatina</label><input type="checkbox" name="pasa" value="X"></td>
							<td>Parasitosis<input type="checkbox" name="pasa" value="X"></td>
							<td>Hepatitis<input type="checkbox" name="pasa" value="X"></td>
							<td>Sida   <input type="checkbox" name="pasa" value="X"></td>
							<td>Asma   <input type="checkbox" name="pasa" value="X"></td>
						</tr>

						<tr>
							<td class="Separador" colspan="5"></td>
						</tr>

						<tr>
							<td>Disf. Endocrinas<input type="checkbox" name="pasa" value="X"></td>
							<td>Hipertensi&oacute;n<input type="checkbox" name="pasa" value="X"></td>
							<td>Cancer<input type="checkbox" name="pasa" value="X"></td>
							<td>ETS<input type="checkbox" name="pasa" value="X"></td>
							<td>Epilepsias<input type="checkbox" name="pasa" value="X"></td>
						</tr>
						<tr>
							<td class="Separador" colspan="5"></td>
						</tr>

						<tr>
							<td>Amigdalitis de Repeticion<input type="checkbox" name="pasa" value="X"></td>
							<td>Tuberculosis<input type="checkbox" name="pasa" value="X"></td>
							<td>Fiebre Reumatica<input type="checkbox" name="pasa" value="X"></td>
							<td>Diabetes<input type="checkbox" name="pasa" value="X"></td>
							<td>Enf cardiovasculares<input type="checkbox" name="pasa" value="X"></td>
						</tr>

						<tr>
							<td class="Separador" colspan="5"></td>
						</tr>

						<tr>
							<td>Artritis<input type="checkbox" name="pasa" value="X"></td>
							<td>Traumatismo c/sec<input type="checkbox" name="pasa" value="X"> </td>
							<td>Int Quirurgicas<input type="checkbox" name="pasa" value="X"> </td>
							<td>Transf Sangu<input type="checkbox" name="pasa" value="X"> </td>
							<td>Alergias<input type="checkbox" name="pasa" value="X"></td>
						</tr>
						<tr>
							<td class="Separador" colspan="5"></td>
						</tr-->

						<tr>
							<td>Observaciones</td><td colspan="2"><textarea class="tam" rows="6" cols="2" name="observaciones">{{ $observaciones }}</textarea></td>
						</tr>
						<tr>
							<td class="Separador" colspan="5"></td>
						</tr>
                                                <tr>
                                                    <td class="Separador" colspan="3"></td>
                                                </tr>
                                                <tr <?php if(($observacionesprofe == NULL) || ($observacionesprofe == '')){echo "style='display: none;'";}else{echo "style='display: table-row;'";}?>>
                                                    <td>Observaciones <br/>profesor:</td>
                                                    <td colspan ="2"><textarea class="tam" name="observaprofesor" rows="6" cols="3" style="background: rgba(100, 100, 100, 0.8)" disabled="true">{{ $observacionesprofe }}</textarea></td>
                                                </tr>
                                                <tr>
                                                        <td class="Separador" colspan="6"></td>
                                                </tr>
                                                <tr>
							<td colspan="5"><input type="submit" value="Guardar datos"></td>
						</tr>
						<tr>
							<td class="Separador" colspan="5"></td>
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
