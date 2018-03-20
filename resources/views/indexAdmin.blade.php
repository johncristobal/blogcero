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
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
                        <?php
                            echo $head;
                        ?>


			<!-- Banner -->
				<section id="banner">
					
					<div class="inner">
						
						<header>
							<h2>Bienvenido al sistema</h2>
						</header>
						<!--p><strong>Administrador #NombreAdmin</strong> 
						</p-->

					</div>
					<!--<iframe src="./html/bienvenida.html" name="contenido"></iframe>-->
					

				</section>

			<!-- Main -->
				<article id="main">

<header class="special container">
                                            <span class="icon fa-bar-chart-o"></span>
                                            <h2><strong>EEMUD</strong>  
                                            Es un sistema para la administración de los expedientes multidisciplinarios clínico-académicos.
                                            </h2>
                                            <p>
                                                Este sistema se crea en apego a las normas oficiales mexicanas vigentes.
                                            </p>
                                    </header>
					<!-- One -->
						
					<!-- Two -->
						

					<!-- Three -->
						

				</article>

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