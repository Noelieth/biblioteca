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
        <link rel="shortcut icon" type="image/x-icon" href="archivos/img/logo.ico"/>
        <link rel="stylesheet" href="archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="archivos/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="archivos/css/animate.css">
        <link rel="stylesheet" href="archivos/css/main.css">
        <link rel="stylesheet" href="archivos/css/media-queries.css">
    </head>

    <body>

        <!-- Top menu -->
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
				<!--menu -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i>Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-th-large"></i>Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="presentacion.php">Presentación</a></li>
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
                        <li class="active">
                            <a href="contact.php"><i class="fa fa-envelope"></i>Contacto</a>
                        </li>
                        <li>
                            <a href="sitemap.php"><i class="fa fa-sitemap"></i>Mapa del Sitio</a>
                        </li>
                    </ul>
				</div>
			</div>
		</nav>

            <!-- <div class="container"></div>
            <div class="espacio"></div> -->
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
                            <li class="active">Contacto</li>
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
                            <h3><i class="fa fa-phone"></i>CONTACTO</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contacto-->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 col-md-12 col-lg-10 contact-video">
	                    <h3>Nuestra ubicación</h3>
	                    <div class="map">
                            <iframe width="640" height="295" src="https://www.youtube.com/embed/fzI9xcfYmCE" frameborder="0" allowfullscreen></iframe>
                        </div>
	                </div>
                    <div class="col-sm-6 contact-address">
                        <div class="address">
                            <h3><i class="fa fa-map-marker"></i>Dirección</h3>
                            <p>Av. San Luis, Campus Universitario, Cerro Colorado, Patio Central,  Edif. Biblioteca. Cumaná, Parroquia Ayacucho, Municipio Sucre, Estado Sucre.</p>

                            <h3><i class="fa fa-phone"></i>Teléfonos</h3>
                            <p><strong>Biblioteca General:</strong> +(58) 0293 400 2128<br>
                            <strong>Procesos Técnicos:</strong> +(58) 0293 400 2154<br>
                            <strong>Biblioteca Manuel Boada (Matemáticas):</strong> +(58) 0293-400 2385<br>
                            <strong>Biblioteca de Enfermería:</strong> +(58) 0293-642 7674</p>

                            <h3><i class="fa fa-clock-o"></i>Horario de atención al público</h3>
                            <p>El horario de atención de los servicios de la biblioteca es: <br>
                                - Lunes a viernes de 8:00am a 6:00pm.<br>
                                - Sábados de 8:00am a 1:00pm, en dos turnos.<br>
                                Turno diurno de 8:00am a 2:00pm (lunes a viernes). <br>
                                Turno mixto de 1:00 a 6:00pm (lunes a viernes) y los días sábados de 8:00 a 1:00 pm.<br>
                                </p>
                        </div>
                    </div>
                    <div class="col-sm-6 contact-address">
                        <div class="address2">
                            <h3>Familia bibliotecaria</h3>
                            <h3><i class="fa fa-angle-right"></i>Biblioteca General</h3>
                            <p><i class="fa fa-user"></i> Lic. Odlanier Gómez |
                            <i class="fa fa-envelope"></i> odlanierg@udo.edu.ve</p>
                            
                            <h3><i class="fa fa-angle-right"></i>Procesos Técnicos</h3>
                            <p><i class="fa fa-user"></i>T.S.U. José Boada M. |
                            <i class="fa fa-envelope"></i>jboada@udo.edu.ve</p>
                            
                            <h3><i class="fa fa-angle-right"></i>Servicios al Público</h3>
                            <p><i class="fa fa-user"></i> T.S.U. Carlos Amaiz |
                            <i class="fa fa-envelope"></i> carlosamaiz@udo.edu.ve<br>
                            <i class="fa fa-user"></i> Sr. Daniel L. Pérez |
                            <i class="fa fa-envelope"></i> dperez@udo.edu.ve</p>

                            <h3><i class="fa fa-angle-right"></i>Publicaciones Periódicas</h3>
                            <p><i class="fa fa-user"></i> Sr. Isidro Morillo |
                            <i class="fa fa-envelope"></i> imorillo@udo.edu.ve</p>

                            <h3><i class="fa fa-angle-right"></i>Biblioteca Manuel Boadas (Matemáticas)</h3>
                            <p><i class="fa fa-user"></i> T.S.U Alberto Pérez |
                            <i class="fa fa-envelope"></i> alperez@udo.edu.ve</p>

                            <h3><i class="fa fa-angle-right"></i>Biblioteca de Enfermería</h3>
                            <p><i class="fa fa-user"></i> T.S.U Lenis B. González |
                            <i class="fa fa-envelope"></i> lenisgonzalez@udo.edu.ve</p>
                        </div>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- pie de pagina -->
        <footer>
            <div class="container">
                <!-- <div class="footer-border"></div> -->
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
        <script src="archivos/js/jquery-2.2.3.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
        <script src="archivos/js/recorrido.js"></script>
    </body>
</html>
