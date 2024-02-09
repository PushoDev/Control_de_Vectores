<!-- *
Copyright 2023 Luis Alberto Guisado (Pusho.Dev)
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <title>© Epidemiologo | Nuevo Caso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icono del Inventario -->
    <link rel="shortcut icon" href="<?php echo base_url('/favicon.ico'); ?>" type="image/x-icon">
    <!-- CSS & JS -->
    <script src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/sweet-alert.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/material-design-iconic-font.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

    <!-- Java Script -->    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url('js/modernizr.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/main.js'); ?>"></script>
    
</head>


<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Control de Vectores
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Control de Vectores</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Casos Febriles <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="institution.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                            <li><a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Síndrome Febríl</a></li>
                            <li><a href="category.html"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                            <li><a href="section.html"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva sección</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                            <li><a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo docente</a></li>
                            <li><a href="student.html"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo estudiante</a></li>
                            <li><a href="personal.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo personal administrativo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="catalog.html"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="loan.html"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                            <li>
                                <a href="loanpending.html"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                            <li>
                                <a href="loanreservation.html"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reservaciones <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="report.html"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    <li><a href="advancesettings.html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                    <img src="<?php echo base_url('assets/img/user01.png') ?>" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Control de Vectores <small>Administración Institución</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
            <li role="presentation"><a href="admininstitution.php">Institución</a></li>
            <li role="presentation" class="active"><a href="provider.html">Proveedores</a></li>
            <li role="presentation"><a href="category.html">Categorías</a></li>
            <li role="presentation"><a href="section.html">Secciones</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?php echo base_url('assets/img/user04.png') ?>" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Sección para registrar un nuevo caso, debes de llenar todos los campos del siguiente formulario para poder registrar a la persona la cuál tiene sospecha de alguna enfermedad con fiebre o sospechosas de alguna transmitida por el Mosquito ...
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li class="active">Nuevo proveedor</li>
                        <li><a href="listprovider.html">Listado de proveedores</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">

                <!-- Formualrio para agregar o editar casos de sindromes Febriles -->
                <div class="title-flat-form title-flat-blue">Agregar un Caso de Síndrome Febril</div>

                <!-- FORMULARIO -->
                <form action="<?php echo base_url('guardar-sindromes-febriles');?>" method="post" autocomplete="off">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" name="nombre_y_apellidos" class="material-control tooltips-general" placeholder="Nombre y Apellidos" required maxlength="255" data-toggle="tooltip" data-placement="top" title="Escribe el nombre y apellidos del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nombre y Apellidos del Paciente</label>
                        </div>

                        <div class="group-material">
                            <input type="date" name="fecha_encuetro" class="material-control tooltips-general" placeholder="Fecha de Encuentro" required data-toggle="tooltip" data-placement="top" title="Seleccione la fecha de encuentro">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Fecha de Encuentro</label>
                        </div>

                        <div class="group-material">
                            <input type="number" name="edad" class="material-control tooltips-general" placeholder="Edad" required min="0" max="150" data-toggle="tooltip" data-placement="top" title="Escribe la edad del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Edad</label>
                        </div>

                        <div class="group-material">
                            <select name="sexo" class="material-control tooltips-general" required data-toggle="tooltip" data-placement="top" title="Seleccione el sexo del paciente">
                                <option value="">Seleccione el Sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Sexo</label>
                        </div>

                        <div class="group-material">
                            <input type="text" name="direccion_de_residencia" class="material-control tooltips-general" placeholder="Dirección de Residencia" required maxlength="255" data-toggle="tooltip" data-placement="top" title="Escribe la dirección de residencia del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Dirección de Residencia</label>
                        </div>

                        <div class="group-material">
                            <input type="text" name="municipio" class="material-control tooltips-general" placeholder="Municipio" required maxlength="255" data-toggle="tooltip" data-placement="top" title="Escribe el municipio del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Municipio</label>
                        </div>

                        <div class="group-material">
                            <input type="text" name="hospital" class="material-control tooltips-general" placeholder="Hospital" required maxlength="255" data-toggle="tooltip" data-placement="top" title="Escribe el hospital del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Hospital</label>
                        </div>

                        <div class="group-material">
                            <input type="text" name="area_de_salud" class="material-control tooltips-general" placeholder="Área de Salud" required maxlength="255" data-toggle="tooltip" data-placement="top" title="Escribe el área de salud del paciente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Área de Salud</label>
                        </div>

                        <p class="text-center">
                            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                        </p>

                    </div>
                </div>

                </form>
                
            </div>
        </div>

        <!-- Cartel de Ayuda para el Usuario -->
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center all-tittles">Ayuda del Sistema</h4>
                    </div>
                    <div class="modal-body">
                        Control de Vectores es un proyecto sencillo, el slogan de los iconos muestra las estructura de esta aplicación. Esta es simplemente una versión la cuál es una prueba,
                        sirve además para cualquier consultorio médico de muestro país o policlínicos. En caso de alguna sugerencia contácteme: bethocubans1990@gmail.com o +5355572430. estamos para
                        servirle...;*
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cartel de Autor del Proyecto -->
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Proyecto realizado para gestionar el Control de Vectores del centro Policlínico Universitario No.2 Ángel Alfonso Ortíz Vázquez de Manzanillo  .
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Luis Alberto Guisado (Pusho.Dev) <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-github zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-linkedin zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-blogger zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2023 PuSchoft | Manzanillo - Cuba</div>
        </footer>


    </div>
</body>
</html>