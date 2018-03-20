<!DOCTYPE HTML>
<html>
	<head>
		<title>EEMUD</title>
		<meta charset="utf-8" />
		
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{url::asset('/')}}assets/css/main.css" /> 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">					
                                    <nav id="nav">
                                        <ul>
                                            <li class="submenu">
                                        @if(Session::has('isAdmin'))    
                                            <li><a href="{{url::asset('/')}}Admin/Expediente/principal" class="button special">Menú</a></li>
                                        @else
                                            <li><a href="{{url::asset('/')}}Profesor/Expediente/principal" class="button special">Menú</a></li>
                                        @endif
                                        </ul>
                                    </nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="inner">
						<!--Se edita desde esta zona-->
					<h3>Odontograma paciente</h3>
					<br>

				<img src="{{url::asset('/')}}imagenes/Odontograma.jpg" usemap="#Odontograma">

				<!--map name="Odontograma">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18" shape="circle" coords="30,56,47" alt="18">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17" shape="circle" coords="50,56,47" alt="17">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16" shape="circle" coords="90,56,47" alt="16">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15" shape="circle" coords="128,56,47" alt="15">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14" shape="circle" coords="150,56,47" alt="14">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13" shape="circle" coords="188,56,47" alt="13">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12" shape="circle" coords="215,56,47" alt="12">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11" shape="circle" coords="250,56,47" alt="11">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21" shape="circle" coords="310,56,40" alt="21">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22" shape="circle" coords="340,56,47" alt="22">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23" shape="circle" coords="380,56,47" alt="23">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24" shape="circle" coords="410,56,47" alt="24">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25" shape="circle" coords="450,56,40" alt="25">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26" shape="circle" coords="480,56,40" alt="26">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27" shape="circle" coords="510,56,40" alt="27">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28" shape="circle" coords="580,56,30" alt="28">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48" shape="circle" coords="30,255,30" alt="48">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47" shape="circle" coords="70,255,30" alt="47">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46" shape="circle" coords="110,255,30" alt="46">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45" shape="circle" coords="140,255,30" alt="45">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44" shape="circle" coords="170,255,30" alt="44">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43" shape="circle" coords="200,255,30" alt="43">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42" shape="circle" coords="240,255,30" alt="42">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41" shape="circle" coords="275,255,30" alt="41">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31" shape="circle" coords="320,255,30" alt="31">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32" shape="circle" coords="350,255,30" alt="32">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33" shape="circle" coords="380,255,30" alt="33">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34" shape="circle" coords="410,255,30" alt="34">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35" shape="circle" coords="440,255,30" alt="35">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36" shape="circle" coords="470,255,30" alt="36">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37" shape="circle" coords="535,255,25" alt="37">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38" shape="circle" coords="560,255,30" alt="38">
				</map-->
			
                                <!--map name="Odontograma">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18" shape="circle" coords="40,85,10" alt="18">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17" shape="circle" coords="80,80,12" alt="17">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16" shape="circle" coords="122,80,12" alt="16">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15" shape="circle" coords="156,80,12" alt="15">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14" shape="circle" coords="190,80,12" alt="14">										
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13" shape="circle" coords="220,80,12" alt="13">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12" shape="circle" coords="255,80,12" alt="12">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11" shape="circle" coords="285,80,12" alt="11">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21" shape="circle" coords="335,80,12" alt="21">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22" shape="circle" coords="368,80,12" alt="22">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23" shape="circle" coords="395,80,12" alt="23">				
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24" shape="circle" coords="430,80,12" alt="24">						
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25" shape="circle" coords="460,80,12" alt="25">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26" shape="circle" coords="492,80,13" alt="26">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27" shape="circle" coords="535,80,12" alt="27">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28" shape="circle" coords="575,80,12" alt="28">


					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48" shape="circle" coords="42,250,12" alt="48">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47" shape="circle" coords="81,250,12" alt="47">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46" shape="circle" coords="123,250,12" alt="46">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45" shape="circle" coords="165,250,12" alt="45">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44" shape="circle" coords="190,250,10" alt="44">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43" shape="circle" coords="225,250,10" alt="43">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42" shape="circle" coords="260,250,10" alt="42">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41" shape="circle" coords="290,250,10" alt="41">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31" shape="circle" coords="330,250,10" alt="31">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32" shape="circle" coords="360,250,10" alt="32">				
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33" shape="circle" coords="395,250,10" alt="33">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34" shape="circle" coords="425,250,10" alt="34">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35" shape="circle" coords="453,250,10" alt="35">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36" shape="circle" coords="492,250,14" alt="36">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37" shape="circle" coords="532,250,14" alt="37">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38" shape="circle" coords="575,250,14" alt="38">					
				</map-->	
				<!--Se ternina de editar aqui-->
                                
                                    <!--map name="Odontograma">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18-OC" shape="circle" coords="40,85,10" alt="18-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18-P" shape="circle" coords="40,120,10" alt="18-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17-OC" shape="circle" coords="80,80,12" alt="17-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17-P" shape="circle" coords="80,120,12" alt="17-P">
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16-OC" shape="circle" coords="122,80,12" alt="16-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16-P" shape="circle" coords="122,120,12" alt="16-P">
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15-OC" shape="circle" coords="156,80,12" alt="15-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15-P" shape="circle" coords="156,120,12" alt="15-P">
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14-OC" shape="circle" coords="190,80,12" alt="14-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14-P" shape="circle" coords="190,120,12" alt="14-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13-I" shape="circle" coords="220,80,12" alt="13-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13-P" shape="circle" coords="220,120,12" alt="13-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12-I" shape="circle" coords="255,80,12" alt="12-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12-P" shape="circle" coords="255,120,12" alt="12-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11-I" shape="circle" coords="285,80,12" alt="11-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11-P" shape="circle" coords="285,120,12" alt="11-P">					

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21-I" shape="circle" coords="335,80,12" alt="21-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21-P" shape="circle" coords="335,120,12" alt="21-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22-I" shape="circle" coords="368,80,12" alt="22-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22-P" shape="circle" coords="368,120,12" alt="22-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23-I" shape="circle" coords="395,80,12" alt="23-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23-P" shape="circle" coords="395,120,12" alt="23-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24-OC" shape="circle" coords="430,80,12" alt="24-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24-P" shape="circle" coords="430,120,12" alt="24-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25-OC" shape="circle" coords="460,80,12" alt="25-OC">
                                        <area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25-P" shape="circle" coords="460,120,12" alt="25-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26-OC" shape="circle" coords="492,80,13" alt="26-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26-P" shape="circle" coords="492,120,13" alt="26-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27-OC" shape="circle" coords="535,80,12" alt="27-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27-P" shape="circle" coords="535,120,12" alt="27-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28-OC" shape="circle" coords="575,80,12" alt="28-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28-P" shape="circle" coords="575,120,12" alt="28-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48-P" shape="circle" coords="42,207,12" alt="48-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48-OC" shape="circle" coords="42,250,12" alt="48-OC">					
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47-P" shape="circle" coords="81,208,12" alt="47-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47-OC" shape="circle" coords="81,250,12" alt="47-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46-P" shape="circle" coords="123,208,12" alt="46-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46-OC" shape="circle" coords="123,250,12" alt="46-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45-P" shape="circle" coords="165,208,12" alt="45-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45-OC" shape="circle" coords="165,250,12" alt="45-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44-P" shape="circle" coords="190,208,10" alt="44-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44-OC" shape="circle" coords="190,250,10" alt="44-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43-P" shape="circle" coords="225,208,10" alt="43-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43-I" shape="circle" coords="225,250,10" alt="43-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42-P" shape="circle" coords="260,209,10" alt="42-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42-I" shape="circle" coords="260,250,10" alt="42-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41-P" shape="circle" coords="290,209,10" alt="41-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41-I" shape="circle" coords="290,250,10" alt="41-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31-P" shape="circle" coords="330,210,10" alt="31-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31-I" shape="circle" coords="330,250,10" alt="31-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32-P" shape="circle" coords="360,208,10" alt="32-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32-I" shape="circle" coords="360,250,10" alt="32-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33-P" shape="circle" coords="395,208,10" alt="33-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33-I" shape="circle" coords="395,250,10" alt="33-I">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34-P" shape="circle" coords="425,210,10" alt="34-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34-OC" shape="circle" coords="425,250,10" alt="34-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35-P" shape="circle" coords="453,210,10" alt="35-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35-OC" shape="circle" coords="453,250,10" alt="35-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36-P" shape="circle" coords="492,210,14" alt="36-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36-OC" shape="circle" coords="492,250,14" alt="36-OC">


					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37-P" shape="circle" coords="532,205,14" alt="37-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37-OC" shape="circle" coords="532,250,14" alt="37-OC">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38-P" shape="circle" coords="575,205,14" alt="38-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38-OC" shape="circle" coords="575,250,14" alt="38-OC">					
				</map-->	
                                
                                <map name="Odontograma">
					<!--Parte superior del odontograma-->
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18-V" shape="circle" coords="40,85,10" alt="18-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18-OC" shape="circle" coords="43,118,8" alt="18-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/18-P" shape="circle" coords="40,133,7" alt="18-P">

						
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17-V" shape="circle" coords="80,80,12" alt="17-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17-OC" shape="rect" coords="69,110,95,123" alt="17-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/17-P" shape="rect" coords="69,140,95,125" alt="17-P">

					
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16-V" shape="circle" coords="122,80,12" alt="16-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16-OC" shape="rect" coords="110,110,136,125" alt="16-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/16-P" shape="rect" coords="110,142,136,127" alt="16-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15-V" shape="circle" coords="156,80,12" alt="15-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15-OC" shape="rect" coords="151,110,170,128" alt="15-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/15-P" shape="rect" coords="152,143,170,134" alt="15-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14-V" shape="circle" coords="190,80,12" alt="14-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14-OC" shape="rect" coords="181,110,200,128" alt="14-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/14-P" shape="rect" coords="182,140,200,130" alt="14-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13-V" shape="circle" coords="220,80,12" alt="13-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13-I" shape="rect" coords="212,110,232,117" alt="13-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/13-P" shape="rect" coords="212,142,232,121" alt="13-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12-V" shape="circle" coords="255,80,12" alt="12-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12-I" shape="rect" coords="244,112,264,118" alt="12-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/12-P" shape="rect" coords="244,142,264,120" alt="12-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11-V" shape="circle" coords="285,80,12" alt="11-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11-I" shape="rect" coords="275,112,300,118" alt="11-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/11-P" shape="rect" coords="275,136,297,120" alt="11-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21-V" shape="circle" coords="335,80,12" alt="21-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21-I" shape="rect" coords="324,124,345,110" alt="21-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/21-P" shape="rect" coords="324,140,345,125" alt="21-P">
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22-V" shape="circle" coords="368,80,12" alt="22-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22-I" shape="rect" coords="355,124,375,110" alt="22-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/22-P" shape="rect" coords="356,140,375,126" alt="22-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23-V" shape="circle" coords="395,80,12" alt="23-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23-I" shape="rect" coords="390,124,410,110" alt="23-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/23-P" shape="rect" coords="390,140,405,126" alt="23-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24-V" shape="circle" coords="430,80,12" alt="24-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24-OC" shape="rect" coords="420,127,440,110" alt="24-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/24-P" shape="rect" coords="420,150,440,130" alt="24-P">

					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25-V" shape="circle" coords="460,80,12" alt="25-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25-OC" shape="rect" coords="450,127,470,110" alt="25-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/25-P" shape="rect" coords="450,150,470,130" alt="25-P">
						
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26-V" shape="circle" coords="490,80,12" alt="26-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26-OC" shape="rect" coords="480,127,510,110" alt="26-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/26-P" shape="rect" coords="486,150,510,130" alt="26-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27-V" shape="circle" coords="536,80,12" alt="27-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27-OC" shape="rect" coords="520,125,560,112" alt="27-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/27-P" shape="rect" coords="523,150,560,127" alt="27-P">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28-V" shape="circle" coords="580,84,12" alt="28-V">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28-OC" shape="rect" coords="567,118,590,112" alt="28-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/28-P" shape="rect" coords="570,133,588,119" alt="28-P">

					<!--Parte inferior del odontograma-->					

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48-P" shape="rect" coords="28,194,55,205" alt="48-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48-OC" shape="rect" coords="36,208,55,220" alt="48-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/48-V" shape="circle" coords="42,250,12" alt="48-V">					
					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47-P" shape="rect" coords="70,190,95,205" alt="47-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47-OC" shape="rect" coords="74,208,97,220" alt="47-OC">					
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/47-V" shape="circle" coords="81,250,12" alt="47-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46-P" shape="rect" coords="108,200,138,210" alt="46-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46-OC" shape="rect" coords="112,213,140,226" alt="46-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/46-V" shape="circle" coords="123,250,12" alt="46-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45-P" shape="rect" coords="153,195,170,207" alt="45-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45-OC" shape="rect" coords="152,210,170,223" alt="45-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/45-V" shape="circle" coords="165,250,12" alt="45-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44-P" shape="rect" coords="183,195,202,208" alt="44-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44-OC" shape="rect" coords="183,210,200,223" alt="44-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/44-V" shape="circle" coords="190,250,10" alt="44-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43-P" shape="rect" coords="215,195,235,211" alt="43-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43-I" shape="rect" coords="215,215,235,224" alt="43-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/43-V" shape="circle" coords="225,250,10" alt="43-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42-P" shape="rect" coords="245,198,265,214" alt="42-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42-I" shape="rect" coords="245,218,270,224" alt="42-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/42-V" shape="circle" coords="260,250,10" alt="42-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41-P" shape="rect" coords="277,198,298,216" alt="41-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41-I" shape="rect" coords="277,219,298,226" alt="41-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/41-V" shape="circle" coords="290,250,10" alt="41-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31-P" shape="rect" coords="320,198,340,216" alt="31-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31-I" shape="rect" coords="320,219,340,226" alt="31-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/31-V" shape="circle" coords="330,250,10" alt="31-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32-P" shape="rect" coords="354,190,373,213" alt="32-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32-I" shape="rect" coords="354,215,373,226" alt="32-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/32-V" shape="circle" coords="360,250,10" alt="32-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33-P" shape="rect" coords="385,190,405,213" alt="33-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33-I" shape="rect" coords="385,215,405,225" alt="33-I">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/33-V" shape="circle" coords="395,250,10" alt="33-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34-P" shape="rect" coords="420,190,436,207" alt="34-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34-OC" shape="rect" coords="420,210,436,225" alt="34-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/34-V" shape="circle" coords="425,250,10" alt="34-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35-P" shape="rect" coords="447,190,466,208" alt="35-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35-OC" shape="rect" coords="447,210,466,225" alt="35-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/35-V" shape="circle" coords="453,250,10" alt="35-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36-P" shape="rect" coords="480,193,510,208" alt="36-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36-OC" shape="rect" coords="480,212,508,224" alt="36-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/36-V" shape="circle" coords="492,254,14" alt="36-V">


					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37-P" shape="rect" coords="520,195,550,204" alt="37-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37-OC" shape="rect" coords="520,206,550,222" alt="37-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/37-V" shape="circle" coords="532,250,14" alt="37-V">

					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38-P" shape="rect" coords="562,195,585,204" alt="38-P">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38-OC" shape="rect" coords="562,208,585,224" alt="38-OC">
					<area href="{{URL::asset('/')}}Profesor/Expediente/HigOral/HistorialDental/38-V" shape="circle" coords="575,250,14" alt="38-V">					
				</map>		
                                
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




