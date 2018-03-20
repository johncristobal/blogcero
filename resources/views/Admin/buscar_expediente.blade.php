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
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                <link rel="stylesheet" href="{{url::asset('/')}}assets/css/main.css" /> 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
                
                <script type="text/javascript">
                    
                    function actualizar(id){
                        var c = confirm('Actualizar '+ id);
                        
                    }
                    
                    function verexpediente(id){
                        //alert(id);
                        $.ajax({
                            type:'POST',
                            //save id expedinete to load info from DB
                            url:'{{url::asset('/')}}Expediente/verprincipal/'+id,
                            data:{'id':id},
                            success:function(data){
                                //alert(data);
                                //alert('Expediente '+data+' eliminado del sistema.');
                                window.location.href = '{{url::asset('/')}}Admin/Expediente/principal';
                            }
                        },10000);
                    }
                    
                    function verimagenes(id){
                        //alert(id);
                        $.ajax({
                            type:'POST',
                            url:'{{url::asset('/')}}Expediente/verprincipal/'+id,
                            data:{'id':id},
                            success:function(data){
                                //alert(data);
                                //alert('Expediente '+data+' eliminado del sistema.');
                                window.location.href = '{{url::asset('/')}}Expediente/imagenes';
                            }
                        },10000);
                    }
                    
                    function vernotas(id){
                        //alert(id);
                        $.ajax({
                            type:'POST',
                            url:'{{url::asset('/')}}Expediente/verprincipal/'+id,
                            data:{'id':id},
                            success:function(data){
                                //alert(data);
                                //alert('Expediente '+data+' eliminado del sistema.');
                                window.location.href = '{{url::asset('/')}}Admin/Nota/notas';
                            }
                        },10000);
                    }
                    
                    function eliminar(id){
                        var c = confirm('¿Desea eliminar este expediente? ');
                        if(c){
                            $.ajax({
                                type:'POST',
                                url:'{{url::asset('/')}}Expediente/remove/'+id,
                                data:{'id':id},
                                success:function(data){
                                    alert('Expediente '+data+' eliminado del sistema.');
                                    location.reload();
                                }
                            },10000);
                        }
                    }
                    
                    function buscar() {
                        // Declare variables 
                        var input, filter, table, tr, td, i,td2,flag;
                        flag = 0;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("buscador");
                        tr = table.getElementsByTagName("tr");
                        // Loop through all table rows, and hide those who don't match the search query
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];   //get the first column
                            td2 = tr[i].getElementsByTagName("td")[1];   //get the first column
                            if (td){
                                if ((td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td2.innerHTML.toUpperCase().indexOf(filter) > -1)) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }                            
                        }
                    }
                    
                </script>
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

                    <h3>Búsqueda de expediente</h3>
                <input type="text" id="myInput" onkeyup="buscar()" placeholder="Buscar folio expediente o paciente..." style="width:100%;">
				
		<form method="" action="">
                    <br>
                    <table class="table" id="buscador" width="100%">
                    <thead>
                        <th width="10%"><h3>Folio</h3></th>
                        <th width="15%"><h3>Alumno</h3></th>
                        <th width="15%"><h3>Paciente</h3></th>
                        <th width="15%"><h3>Fecha</h3></th>
                        <th width="10%"><h3>Estatus</h3></th>
                        <!--th width="5%"></th-->
                        <th width="10%">Ver</th>
                        <!--th width="10%">Archivos</th-->
                        <th width="10%">Notas</th>                    
                    </thead>
                    <tbody>
                    @foreach ($data as $value) 
                    <tr>  
                        <td>{{ $value->folio_expediente }}</td>
                        <td>{{ $value->name }} &nbsp; {{ $value->pat}}</td>
                        <td>{{ $value->nombre_paciente }} &nbsp; {{ $value->ap_paterno }}</td>
                        <td>{{ $value->fecha_inicio }}</td>                                        
                        <td><?php if($value->status == 1){echo "Por validar";} else if($value->status == 2){echo "Inactivos";} else if($value->status == 4){echo "Revisado";} else if($value->status == 5){echo "Validado";}?></td>                     
                        <!--td><img src="{{url::asset('/')}}imagenes/ic_settings_white_24dp_2x.png" alt="Editar" onclick="actualizar({{ $value->id }});"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td-->
                        <td><img src="{{url::asset('/')}}imagenes/ic_settings_white_24dp_2x.png" alt="Editar" onclick="verexpediente({{ $value->id }});"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <!--td><img src="{{URL::asset('/')}}imagenes/ic_image_white_24dp_2x.png" alt="Imagenes" onclick="verimagenes({{ $value->id }});"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td-->
                        <td><img src="{{url::asset('/')}}imagenes/ic_note_add_white_24dp_2x.png" alt="Notas" onclick="vernotas({{ $value->id }});"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    @endforeach
                    <!--tr>
                        <td colspan="3" align="center"><input type="submit" value="Buscar"></td>
                    </tr-->
                    </tbody>
		</table>
        	</form>

                </div>
                </section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-bar-chart-o"></span>
						<h2><strong>EEMUD</strong>  Es un sistema diseñado para 
						<br />
						para la gestión de un consultorio</h2>
						
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