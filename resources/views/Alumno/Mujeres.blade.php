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
                            data:{'tipo':'mujeres'},
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
					<h2>Informaci&oacute;n Mujeres</h2>
				
                                        <form method="post" action="{{url::asset('/')}}Expediente/Alta/Mujeres" id="form1">
					<table border="0" align="center" class="default">
						<tr>
							<td><label>Menarca</label></td>
							<td>
                                                            {!!
                                                                Form::select('menarca',[
                                                                'Selecciona'=>'Selecciona',
                                                                'noaplica'=>'No aplica',
                                                                'menosde9'=>'Menos de 9',
                                                                'entre9y15'=>'Entre 9 y 15 a&ntilde;os',
                                                                'masde15'=>'Más de 15 a&ntilde;os'
                                                                ],$menarca)
                                                            !!}
                                                            
                                                            <!--select>
									<option>Selecciona</option>
									<option>No aplica</option>
									<option>Menos de 9</option>
									<option>Entre 9 y 15 a&ntilde;os</option>
									<option>mas de 15 a&ntilde;os</option>
								</select-->
                                                        </td>		
						</tr>
                                                <tr>
							<td><label>Edad Menopausia</label></td>
							<td>
                                                        {!!
                                                                Form::select('meno',[
                                                                'Selecciona'=>'Selecciona',
                                                                'noaplica'=>'No aplica',
                                                                'menosde35'=>'Menos de 35',
                                                                'entre35y40'=>'Entre 35 y 40 a&ntilde;os',
                                                                'entre40y45'=>'Entre 40 y 45 a&ntilde;os',
                                                                'entre45y50'=>'Entre 45 y 50 a&ntilde;os',
                                                                'entre50y55'=>'Entre 50 y 55 a&ntilde;os',
                                                                'masde55'=>'Más de 55 a&ntilde;os'
                                                                ],$meno)
                                                            !!}

                                                            <!--select class="form">
									<option>Selecciona</option>
									<option>No aplica</option>
									<option>Menos de 35</option>
									<option>Entre 35 y 40</option>
									<option>Entre 40 y 45</option>
									<option>Entre 45 y 50</option>
									<option>Entre 50 y 55</option>
									<option>Mas de 55</option>
								</select--></td>								
						</tr>
                                                <tr>
							<td><label>Embarazos</label></td>
							<td>
                                                            {!!
                                                                Form::select('embarazos',[
                                                                'Selecciona'=>'Selecciona',
                                                                'noaplica'=>'No aplica',
                                                                'entre0y3'=>'Entre 0 y 3',
                                                                'entre4y6'=>'Entre 4 y 6',
                                                                'entre6y10'=>'Entre 6 y 10',
                                                                'masde10'=>'Más de 10'
                                                                ],$embarazos)
                                                            !!}
                                                            
                                                            <!--select class="form">
									<option>Selecciona</option>
									<option>No aplica</option>
									<option>Entre 0 y 3</option>
									<option>Entre 4 y 6</option>
									<option>Entre 6 y 10</option>
									<option>Mas de 10</option>
								</select--></td>	
						</tr>                                                
						<tr>
							<td><label>Partos</label></td>
							<td>
                                                            {!!
                                                                Form::select('partos',[
                                                                'Selecciona'=>'Selecciona',
                                                                '0'=>'No aplica',
                                                                '1'=>'0',
                                                                '2'=>'1',
                                                                '3'=>'2',
                                                                'masde3'=>'Más de 3'
                                                                ],$partos)
                                                            !!} 

                                                            <!--select class="form">
									<option>Selecciona</option>
									<option>De 0 a 3</option>
									<option>De 4 a 7</option>
									<option>M&aacute;s de 7</option>
								</select--></td>	
						</tr>	
                                                <tr>
							<td><label>Cesáreas</label></td>
							
                                                        <td>
                                                            {!!
                                                                Form::select('cesa',[
                                                                'Selecciona'=>'Selecciona',
                                                                '0'=>'No aplica',
                                                                '1'=>'0',
                                                                '2'=>'1',
                                                                '3'=>'2',
                                                                'masde3'=>'Más de 3'
                                                                ],$cesa)
                                                            !!}                                                            
                                                            <!--select class="form">
									<option>Selecciona</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>Mas de 3</option>
								</select-->
                                                        </td>	
						</tr>
						<tr>
							<td><label>Abortos</label></td>
							<td>
                                                            {!!
                                                                Form::select('abortos',[
                                                                'Selecciona'=>'Selecciona',
                                                                '0'=>'No aplica',
                                                                '1'=>'0',
                                                                '2'=>'1',
                                                                '3'=>'2',
                                                                'masde3'=>'Más de 3'
                                                                ],$abortos)
                                                            !!} 

                                                            <!--select class="form">
									<option>Selecciona</option>
									<option>No aplica</option>
									<option>De 0 a 3</option>
									<option>De 4 a 7</option>
									<option>M&aacute;s de 7</option>
								</select-->
                                                        </td>	
						</tr>

						<tr>
							<td class="Separador" colspan="2"></td>
						</tr>	
						
						<tr>
							<td><label>Fecha de Último Papanicolau</label></td>
                                                        <td><input type="date" class="form" name="fechapapa" value="{{ $fechapapa }}"></td>
						</tr>

						<tr>
							<td class="Separador" colspan="2"></td>
						</tr>

						<tr>
							<td><label>Fecha de Última Menstruación</label></td>
							<td><input type="date" class="form" name="fechames" value="{{ $fechames }}"></td>
						</tr>
						
						<tr>
							<td class="Separador" colspan="2"></td>
						</tr>		

						<tr>
							<td><label>Observaciones</label></td>
                                                        <td><textarea rows="3" cols="30" class="form" name="observaciones">{{ $observaciones }}</textarea></td>
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


