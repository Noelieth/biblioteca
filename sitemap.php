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
                        <li>
                            <a href="contact.php"><i class="fa fa-envelope"></i>Contacto</a>
                        </li>
                        <li class="active">
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
                            <li class="active">Mapa del sitio</li>
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
                            <h3><i class="fa fa-sitemap"></i>MAPA DEL SITIO</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="col-sm-4 col-md-4 sitemap-box">
                                <ul>
                                    <li><h3><a href="index.php"><i class="fa fa-chevron-right"></i>Inicio</a></h3></li>
                                    <li><h3><i class="fa fa-chevron-right"></i>Nosotros</h3></li>
                                    <ul>
                                        <li><p><a href="presentacion.php"><i class="fa fa-chevron-right"></i>PRESENTACIÓN</a></p></li>
                                        <li><p><a href="historia.php"><i class="fa fa-chevron-right"></i>RESEÑA HISTÓRICA</a></p></li>
                                    </ul>
                                    <li><h3><i class="fa fa-chevron-right"></i>Tu universidad</h3></li>
                                    <ul>
                                        <li><p><a href="autoridades.php"><i class="fa fa-chevron-right"></i>AUTORIDADES</a></p></li>
                                        <li><p><a href="organigrama-universidad.php"><i class="fa fa-chevron-right"></i>ORGANIGRAMA</a></p></li>
                                        <li><p><a href="historia-universidad.php"><i class="fa fa-chevron-right"></i>RESEÑA HISTÓRICA</a></p></li>
                                        <li><p><a href="ubicacion-universidad.php"><i class="fa fa-chevron-right"></i>UBICACIÓN GEOGRÁFICA</a></p></li>
                                    </ul>
                                    <li><h3><a href="repositorios.php"><i class="fa fa-chevron-right"></i>Repositorios</a></h3></li>
                                    <ul>
                                        <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>VENEZUELA</a></p></li>
                                        <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>HISPANOS</a></p></li>
                                            <ul>
                                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>ESPAÑA</a></p></li>
                                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>ARGENTINA</a></p></li>
                                            </ul>
                                    </ul>
                                  </ul>  
                        </div>
                        <div class="col-sm-4 col-md-4 sitemap-box">
                            <ul> 
                                <ul>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>CHILE</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>COLOMBIA</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>ECUADOR</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>EL SALVADOR</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>MÉXICO</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>PERÚ</a></p></li>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>OTROS</a></p></li>
                                </ul>
                                <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>OTROS IDIOMAS</a></p></li>
                                    <ul>
                                        <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>PORTUGUÉS</a></p></li>
                                        <ul>
                                            <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>BRASIL</a></p></li>
                                            <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>PORTUGAL</a></p></li>
                                        </ul>
                                        <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>INGLÉS</a></p></li>
                                        <ul>
                                            <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>USA</a></p></li>
                                            <li><p><a href="repositorios.php"><i class="fa fa-chevron-right"></i>INGLATERRA</a></p></li>
                                        </ul>
                                    </ul>
                            </ul>
                        </div>

    	                <div class="col-sm-4 col-md-4 sitemap-box">
                            <img src="archivos/img/sitemap.svg">
                            <ul>
                                <li><h3><a href="dbaa.php"><i class="fa fa-chevron-right"></i>Bases de Datos</a></h3></li>
                                    <ul>
                                        <li><p><a href="dbaa.php"><i class="fa fa-chevron-right"></i>NACIONALES</a></p></li>
                                        <li><p><a href="dbaa.php"><i class="fa fa-chevron-right"></i>EN ESPAÑOL</a></p></li>
                                        <li><p><a href="dbaa.php"><i class="fa fa-chevron-right"></i>OTROS IDIOMAS</a></p></li>
                                    </ul>
                                    <li><h3><a href="contact.php"><i class="fa fa-chevron-right"></i>Contacto</a></h3></li>
                                    <li><h3><a href="login.php"><i class="fa fa-chevron-right"></i>Acceso</a></h3></li>
                            </ul>        
    	                </div>
                    </div> 
	            </div>
	        </div>
        </div>

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
        <script src="archivos/js/jquery-2.2.3.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
    </body>

</html>
