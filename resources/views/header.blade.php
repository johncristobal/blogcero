<header id="header" class="alt">
        <nav id="nav">
                <ul>

                        <!--li><a href="{{URL::asset('/')}}Usuarios" class="button special" target="_self">Usuarios</a></li-->
                        <!--li><a href="{{URL::asset('/')}}Usuarios/cerrarsesion" class="button special">Cerrar Sesión</a></li-->
                        
                        <li class="submenu">
                            <a href="#">Expediente</a>
                            <ul>
                                <li><a href="{{URL::asset('/')}}Expediente" target="_self">Alta Expediente</a></li>
                                <li><a href="{{URL::asset('/')}}Asignar" target="_self">Asignar Expediente</a></li>
                                <li><a href="{{URL::asset('/')}}Transferir" target="_self">Transferir Expediente</a></li>					
                                <li><a href="{{URL::asset('/')}}Buscar" target="_self">Consultar Expediente</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">Usuarios</a>
                            <ul>
                                <li><a href="{{URL::asset('/')}}Usuarios" target="_self">Dar de alta usuario</a></li>
                                <li><a href="{{URL::asset('/')}}Usuarios/altaprofesor" target="_self">Dar de alta profesor</a></li>
                                <li><a href="{{URL::asset('/')}}Editarusuario" target="_self">Usuarios registrados</a></li>
                                <li><a href="{{URL::asset('/')}}Usuarios/cerrarsesion" target="_self">Cerrar sesión</a></li>
                            </ul>
                        </li>

                        <!--li class="submenu">
                            <a href="#">Perfil</a>
                            <ul>
                                <li><a href="Cambiar_Contr.html" target="_self">Cambiar contraseña</a></li>
                                <li><a href="Estado_Aplic.html" target="_self">Estado de aplicación</a></li>
                            </ul>
                        </li-->								
                </ul>
        </nav>
</header>