<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EEMUD</title>
		<meta charset="utf-8" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                <link rel="stylesheet" href="{{url::asset('/')}}assets/css/main.css" /> 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

                <script type="text/javascript">                
                </script>

	</head>
	<body class="index">
                <div id="page-wrapper">

                    <!-- Header -->
                    <header id="header" class="alt">
                            <h1 id="logo"><a href="">Bienvenido <span>
                                    @if(Session::has('nombrecom'))    
                                      {{ Session::get('nombrecom')}} 
                                    @endif
                                    </span></a></h1>
                            <nav id="nav">
                                    <ul>
                                            <!--li class="submenu">
                                                    <a href="#">Mi Perfil</a>
                                                    <ul>
                                                            <li><a href="left-sidebar.html">Cambiar contraseña</a></li>
                                                    </ul>
                                            </li-->	


                                            <li><a href="{{url::asset('/')}}Expediente/todos" class="button">Ver expedientes</a></li>
                                            <li><a href="{{url::asset('/')}}Usuarios/cerrarsesion" class="button special">Cerrar Sesión</a></li>
                                    </ul>
                            </nav>
                    </header>

                    <!-- Banner -->
                            <section id="banner">
                                <div class="inner">

                                    <!--
                                            ".inner" is set up as an inline-block so it automatically expands
                                            in both directions to fit whatever's inside it. This means it won't
                                            automatically wrap lines, so be sure to use line breaks where
                                            appropriate (<br />).
                                    -->
                                    <!--<div class="inner">

                                            <header>
                                                    <h2>Menú Principal </h2>
                                            </header>
                                            <p><strong>EEMUD</strong> es un sistema diseñado para almacenar datos de pacientes
                                            </p>

                                    </div> -->

                                    <h2>Menú Principal </h2>

                                    <div class="container">
                                        
 
                                    <table border ="0" align="center" class="default">
			<tr>
                            <td><a href="{{url::asset('/')}}Expediente/FichaExp"><img src="{{url::asset('/')}}<?php if($ficha == "5"){echo "imagenes/fwdbotonesactivosgrises/IDENTIFICACINN.png";} else {echo "imagenes/b7.png";}?>" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/FamHeder"><img src="{{url::asset('/')}}<?php if($heredo == "5"){echo "imagenes/fwdbotonesactivosgrises/HEREDOFAMS.png";} else {echo "imagenes/b8.png";}?>" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/AntescPat"><img src="{{url::asset('/')}}<?php if($patologico == "5"){echo "imagenes/fwdbotonesactivosgrises/APP.png";} else {echo "imagenes/b2.png";}?>" heigth="50" width="300"></a></td>
			</tr>
			<tr>
                            <td><a href="{{url::asset('/')}}Expediente/AntescNoPat"><img src="{{url::asset('/')}}<?php if($nopatologico == "5"){echo "imagenes/fwdbotonesactivosgrises/APNP.png";} else {echo "imagenes/b1.png";}?>" heigth="50" width="300"></a></td>

                            <td><a href="{{url::asset('/')}}Expediente/Aparatos"><img src="{{url::asset('/')}}<?php if($aparatos == "5"){echo "imagenes/fwdbotonesactivosgrises/APA Y SISTE.png";} else {echo "imagenes/b3.png";}?>" heigth="50" width="300"></a></td>

                            <td><a href="{{url::asset('/')}}Expediente/Mujeres"><img src="{{url::asset('/')}}<?php if($mujeres == "5"){echo "imagenes/fwdbotonesactivosgrises/MUJERES.png";} else {echo "imagenes/b10.png";}?>" heigth="50" width="300"></a></td>
			</tr>
				
			<tr>		
                            <td><a href="{{url::asset('/')}}Expediente/ExplFisica"><img src="{{url::asset('/')}}<?php if($explo == "5"){echo "imagenes/fwdbotonesactivosgrises/EXPLO FISI.png";} else {echo "imagenes/b6.png";}?>" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/HigOral"><img src="{{url::asset('/')}}<?php if($bucal == "5"){echo "imagenes/fwdbotonesactivosgrises/HIGI ORA.png";} else {echo "imagenes/b9.png";}?>" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/Receta"><img src="{{url::asset('/')}}imagenes/b12.png" heigth="50" width="300"></a></td>
			</tr>

			<tr>
                            <td><a href="{{url::asset('/')}}Expediente/Consentimiento"><img src="{{url::asset('/')}}imagenes/b4.png" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/Diagnostico"><img src="{{url::asset('/')}}<?php if($resumen == "5"){echo "imagenes/fwdbotonesactivosgrises/RESU CLINI.png";} else {echo "imagenes/b13.png";}?>" heigth="50" width="300"></a></td>
                            <td><a href="{{url::asset('/')}}Expediente/Nota"><img src="{{url::asset('/')}}imagenes/b11.png" heigth="50" width="300"></a></td>
			</tr>
		</table>

                        </div>
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