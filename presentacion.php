<?php
  session_start();
 ?>
 <?php
  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
  }
  ?>
<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIBLIOTECA GENERAL - UDO SUCRE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="archivos/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="archivos/css/animate.css">
        <link rel="stylesheet" href="archivos/css/main.css">
        <link rel="stylesheet" href="archivos/css/media-queries.css">

    </head>

    <body>
        <!-- menu arriba -->
		<nav class="navbar" role="navigation">
			<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <br class="visible-xs">
                <h5><img src="archivos/img/logo.png" class="pull-left logo-movil visible-xs"><a class="blue visible-xs" href="index.php">Biblioteca General - Núcleo Sucre</a></h5>
            </div>
				<!-- menu  -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i>Inicio</a>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-th-large"></i>Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li class="active"><a href="presentacion.php">Presentación</a></li>
                                <li><a href="historia.php">Historia</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-university"></i>Tu Universidad<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="autoridades.php">Autoridades</a></li>
                                <li><a href="organigrama-universidad.php">Organigrama</a></li>
                                <li><a href="historia-universidad.php">Reseña histórica</a></li>
                                <li><a href="ubicacion-universidad.php">Ubicación geográfica</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                          <a href="repositorios.php" class="dropdown-toggle" data-hover="dropdown" data-delay="1000">
                              <i class="fa fa-database"></i>Repositorios<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                              <li><a href="dbaa.php">Bases de datos</a></li>
                          </ul>
                      </li>
                        <li>
                            <a href="contact.php"><i class="fa fa-envelope"></i>Contacto</a>
                        </li>
                        <li>
                            <a href="sitemap.php"><i class="fa fa-sitemap"></i>Mapa del Sitio</a>
                        </li>
                    </ul>
				</div>
			</div>
		</nav>

        <!-- banner -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class = "banner">
                        <img src="archivos/img/banner.png"/>    
                        </div>
                    </div>
                </div>
            </div> <!-- fin banner -->

        <!--///////////////////// RUTA DE NAVEGACION/////////////////////////////////////-->
        <div class="ruta-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <ol class="breadcrumb ruta">
                            <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
                            <li class="active">Nosotros</li>
                            <li class="active">Presentación</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--///////////////////// TITULO /////////////////////////////////////-->
        <div class="titulo-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="titulo">
                            <h3>PRESENTACIÓN</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--///////////////////// cita /////////////////////////////////////-->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="image-quote hidden-xs">
                            <img src="archivos/img/presentacion/comilla.png"/>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <div class="quote">
                            <h4><i class="fa fa-quote-left visible-xs"></i>La biblioteca destinada a la educación universal, es más poderosa que nuestros ejércitos. - José De San Martín.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////misión y visión/////////////////////////////////////////////////////-->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="texto-pres wow slideInLeft">
                            <h3>Misión</h3>
                            <p>Ofrecer a la Universidad de Oriente un servicio de consulta presencial y/o teleinformática de colecciones documentales y audiovisuales contenidas dentro y fuera de la institución, prestando dicho servicio con una actitud de búsqueda continua de la satisfacción creciente del usuario en pro de la docencia, investigación y la extensión.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                       <div class="texto-pres wow slideInRight">
                            <h3>Visión</h3>
                            <p>Consolidarse como un órgano que se caracterice por la prestación de servicios de información bibliográficos, audiovisuales y de documentación académica dentro y fuera de la Institución, con el aprovechamiento de un sistema teleinformática de excelencia que garantice la satisfacción de las necesidades de los usuarios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- ////////////objetivos //////////////////////////////////////-->
        <div class = "objetivos-container">
            <div class="container">
                <div class="objetivo">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                              <div class="caja-objetivos">
                                <h3>Objetivos</h3>
                              </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <div class="text-center">
                                <img src="archivos/img/presentacion/objetivo1.png"/>
                                <p>Prestar a los usuarios de la UDO servicios de búsqueda de la información vía internet.</p>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay=".3s">
                            <div class="text-center">
                                <img src="archivos/img/presentacion/objetivo2.png"/>
                                <p>Integrar los servicios de información de SIBIUDO a los servicios nacionales e internacionales de información académica.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                           <div class="text-center">
                                <img src="archivos/img/presentacion/objetivo3.png"/>
                                <p>Mantener actualizada la dotación documental, tanto bibliográfica como electrónica, requerida para apoyar las actividades de investigación, docencia y la extensión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                           <div class="text-center">
                                <img src="archivos/img/presentacion/objetivo4.png"/>
                                <p>Utilizar la mejor tecnología accesible a la institución para preservar y difundir la historia y la cultura del oriente de Venezuela.</p>
                           </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- /////////////organizacion de las colecciones/////////////////////////////////////////////////////-->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="caja-colecciones">
                        <h3>Organización de las colecciones</h3>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="image-pres wow slideInLeft">
                            <img src="archivos/img/presentacion/coleccion.png"/>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                       <div class="coleccion-box wow slideInRight">
                            <div class="coleccion pull-left">
                                <div class="pull-left"><i class="fa fa-book fa-2x"></i></div>
                                <div class="text-coleccion"><h4>Sistema de Clasificación Decimal de Melvin Dewey.</h4></div>
                            </div>
                            <div class="coleccion pull-left">
                                <div class="pull-left"><i class="fa fa-book fa-2x"></i></div>
                                <div class="text-coleccion"><h4>Tablas de L. E. Málaga.</h4></div>
                            </div>
                            <div class="coleccion pull-left">
                                <div class="pull-left"><i class="fa fa-book fa-2x"></i></div>
                                <div class="text-coleccion"><h4>Normas Internacionales de Descripción Bibliográfica.</h4></div>
                            </div>
                            <div class="coleccion pull-left">
                                <div class="pull-left"><i class="fa fa-book fa-2x"></i></div>
                                <div class="text-coleccion"><h4>Normas de Catalogación Angloamericanas.</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ////////////infraestructura //////////////////////////////////////-->
        <div class = "presentation-container">
            <div class="container">
                <div class="infraestructura">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="coleccion">
                        <h3>Infraestructura de la Biblioteca General</h3>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <!-- panel uno -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- =========================
                                Panel 1
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <div class="panel-title">
                                        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="state"><strong></strong></span>
                                            <strong>Tercer Piso</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Se encuentra la sala de computación donada por CANTV a través del proyecto de “Laboratorios de Software Libre en Universidades”, y la sala lectura.
                                    </div>
                                </div>
                            </div>

                            <!-- =========================
                              Panel 2
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="state"><strong></strong></span>
                                            <strong>Segundo Piso</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        En esta área se encuentra la sala de los trabajos de grados, ascensos y postgrado (actualmente cerrada), la sala de computación del proyecto alma mater, próxima a ser entregada por la Oficina de Planificación del Sector Universitario (OPSU) ya que cedida a la Universidad en calidad de préstamo hasta cumplir con ciertos requisitos, en esta área también se encuentran dos baños sin funcionamiento.
                                    </div>
                                </div>
                            </div>

                            <!-- =========================
                              Panel 3
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="state"><strong></strong></span>
                                            <strong>Primer Piso</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Funciona la sala de lecturas y referencias, sólo para uso interno. En este piso se encuentran dos (2) baños, uno de damas y otro de caballero. (Sin funcionamiento).
                                    </div>
                                </div>
                            </div>
                             <!-- =========================
                              Panel 4
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="state"><strong></strong></span>
                                            <strong>Planta Baja</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        Funcionan los servicios de préstamo circulante, préstamo interno y/o devolución de libros, catálogos o ficheros electrónicos, sala de tesis provisional, debido a que la misma está cerrada aproximadamente hace un(1) año por problemas de contaminación, área de fotocopiada, es un área recuperada debido a que el espacio estuvo cerrado por varios años y control de usuarios. Además de dos (2) baños que fueron recuperados y son los que funcionan para el personal de biblioteca y librería.
                                    </div>
                                </div>
                            </div>
                            <!-- =========================
                              Panel 5
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span class="state"><strong></strong></span>
                                            <strong>Área de Procesos Técnicos</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        Lugar donde se procesa todo el material bibliográfico, se realiza la selección, clasificación, rotulación y etiquetado de dicho material, para luego ser enviado al edificio de biblioteca para su posterior uso, además funciona el área de revisión de los trabajos de digitalización y metadatos (trabajos de grado, ascenso y postgrado).
                                    </div>
                                </div>
                            </div>
                            <!-- =========================
                              Panel 6
                            ============================== -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <span class="state"><strong></strong></span>
                                            <strong>Dirección</strong>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        Es la parte de la estructura que coordina y planifica el desarrollo de la biblioteca, elabora y administra el presupuesto, supervisa las actividades de las secciones y/o departamentos o divisiones, forma y dirige al personal, elabora informes de gestión, participa en reuniones, congresos y eventos relacionados con la biblioteca.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="wow slideInRight">
                            <img src=""/>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class = "espacio"></div>


        <!-- pie de pagina -->
        <footer>
            <div class="container">
                <div class="row">
                  <div class="col-sm-2 col-md-2 footer-copyright wow fadeIn">
                      <p>
                        <?php
                            if (isset($_SESSION['usuario'])) {
                                if(($_SESSION['nivel'] == 1)){
                                  echo "<a href='admin/pages/admin.php?tipo=elegir&op=elegir'><i class='fa fa-gear'></i>ADMINISTRACIÓN</a>";
                                }
                              }
                              else{
                                echo "<a href='login.php'><i class='fa fa-user'></i>ACCESO</a>";
                              }
                          ?>
                        </p>
                    </div>
                  <div class="col-sm-4 col-md-4 footer-copyright wow fadeIn">
                      <p>
                        &copy; 2016 BIBLIOTECA GENERAL - UDO SUCRE.
                      </p>
                  </div>
                  <div class="col-sm-4 col-md-4 footer-copyright wow fadeIn">
                      <p><strong>"DEL PUEBLO VENIMOS, HACIA PUEBLO VAMOS."</strong></p>
                  </div>
                  <div class="col-sm-2 col-md-2 footer-social wow fadeIn">
                      <a href="https://www.facebook.com/BibliotecaGeneralSucre"><i class="fa fa-facebook-square"></i></a>
                      <a href="#"><i class="fa fa-twitter-square"></i></a>
                      <a href="https://www.youtube.com/channel/UCwlQ4IYLVr9bdGh_kKh9N9g"><i class="fa fa-youtube-square"></i></a>
                  </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="archivos/js/jquery-1.11.1.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
    </body>
</html>
