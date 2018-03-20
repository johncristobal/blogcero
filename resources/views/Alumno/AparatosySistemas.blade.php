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
                            data:{'tipo':'aparatos'},
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
					<h2>Aparatos y Sistemas</h2>	
			
                                        <form method="post" action="{{url::asset('/')}}Expediente/Alta/Aparatos" id="form1">
				<table align="center" border="0">

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>
					
				<tr>
					<td><label>Digestivo</label></td>
                                        <td><textarea rows="3" cols="40"class="form" name="diges">{{ $digestivo }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Respiratorio</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="resp">{{ $respiratorio }}</textarea></td>
				</tr>

				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Cardiovascular</label></td>
					<td><textarea rows="3" cols="40" class="form" name="cardio">{{ $cardiovascular }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Músculo esquelético</label></td>
					<td><textarea rows="3" cols="40" class="form" name="esqle">{{ $esqueletico }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Urinario</label></td>
					<td><textarea rows="3" cols="40" class="form" name="uri">{{ $urinario }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Linfohemático</label></td>
					<td><textarea rows="3" cols="40" class="form" name="linfo">{{ $linfo }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Endócrino</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="endo">{{ $endocrino }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Nervioso</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="nervi">{{ $nervioso }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td><label>Tegumentario</label></td>
                                        <td><textarea rows="3" cols="40" class="form" name="tegu">{{ $tegumentario }}</textarea></td>
				</tr>


				<tr>
					<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
                                    <td><label>Observaciones</label></td>
                                    <td><textarea rows="3" cols="40" class="form" name="observaciones">{{ $observaciones }}</textarea></td>
				</tr>
				<tr>
					<td colspan="2"></br></td>
				</tr>
                                
                                <tr <?php if($observaprofe == NULL){echo "style='display: none;'";}else{echo "style='display: table-row;'";}?>>

                                    <td><label>Observaciones profesor:</label></td>
                                    <td><textarea class="tam" name="observaprofesor" rows="6" cols="3" style="background: rgba(100, 100, 100, 0.8)" disabled="true">{{$observaprofe}}</textarea>
                                </tr>
                                
				<tr>
					<td colspan="2"></br></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Guardar Datos"></td>
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

