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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-th-large"></i>Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="presentacion.php">Presentación</a></li>
                                <li><a href="historia.php">Historia</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-university"></i>Tu Universidad<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="autoridades.php">Autoridades</a></li>
                                <li><a href="organigrama-universidad.php">Organigrama</a></li>
                                <li class="active"><a href="historia-universidad.php">Reseña histórica</a></li>
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
                            <li class="active">Tu universidad</li>
                            <li class="active">Reseña Histórica</li>
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
                            <h3><i class="fa fa-history"></i> RESEÑA HISTÓRICA</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- ////////////TIMELINE HISTORIA //////////////////////////////////////-->
        <div class = "tunivesidad-container">
            <div class="container">
                <div class="tunivesidad">
               <div class="espacio"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                        <div class="title-history center-block">
                            <h4><strong>Universidad de Oriente</strong></h4>
                        </div>
                            <ul class="timelineudo">
                                <li>
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div
>                                        <div class="timelineudo-body text-justify">
                                            <p>El Oriente de la República se ha caracterizado siempre por su inquietud cultural. La primera escuela fundada en Venezuela se creó en Cumaná en 1515, y desde comienzos de la colonia se desarrollaron actividades docentes que influyeron notablemente en la región y condujeron a la creación de estudios a nivel superior.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timelineudo-inverted">
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div>
                                        <div class="timelineudo-body text-justify">
                                            <p>La Universidad de Oriente fue creada el 21 de noviembre de 1.958, mediante el Decreto Ley No. 459 dictado por la junta de Gobierno presidida por el Dr. Edgard Sanabria, siendo Ministro de Educación el Dr. Rafael Pizani, bajo la conducción de su Rector fundador Dr. Luis Manuel Peñalver.</p>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div>
                                        <div class="timelineudo-body text-justify">
                                            <p>Comienza sus funciones el 12 de febrero de 1960 en Cumaná, con los Cursos Básicos; en Octubre de 1961 se instala el Núcleo de Monagas con la Escuela de Ingeniería Agronómica y Petróleo; en el Núcleo de Bolívar se iniciaron en Enero de 1962 con la Escuela de Medicina y la Escuela de Geología y Minas, en el Núcleo de Anzoátegui comenzaron el 9 de enero de 1963 con la Escuela de Ingeniería y Química, en el Núcleo de Nueva Esparta se iniciaron los Cursos Básicos el 21 de Enero de 1969.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timelineudo-inverted">
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div>
                                        <div class="timelineudo-body text-justify">
                                            <p>En su concepción la Universidad de Oriente se define como un sistema de educación Superior al servicio del país con objetivos comunes a las demás universidades venezolanas y del mundo. No obstante, es única en su género, experimental y autónoma, innovadora en la creación de la unidad profesional de Cursos Básicos, la departamentalización, los lapsos semestrales, el sistema de unidades de créditos, los cursos intensivos, etc., desarrollando investigación científica, docencia y extensión en todos los aspectos del conocimiento, que contempla sus programas educativos de pre y postgrado.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div>
                                        <div class="timelineudo-body text-justify">
                                            <p>La Universidad de Oriente es casi una antítesis de la universidad tradicional cuyo campus tiene su sede en los núcleos universitarios ubicados en los Estados Anzoátegui, Bolívar, Monagas, Nueva Esparta, y Sucre, asumiendo así la responsabilidad de la educación Universitaria y desde su inicio motor fundamental del desarrollo integral en toda la región insular nororiental y sur del país, en función de las condiciones posibilidades y tendencias de desarrollo de cada uno de los Estados Orientales donde funcionan.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timelineudo-inverted">
                                    <div class="timelineudo-badge info">
                                    </div>
                                    <div class="timelineudo-panel">
                                        <div class="timelineudo-heading">
                                        </div>
                                        <div class="timelineudo-body text-justify">
                                            <p>Administrativamente la autoridad máxima es el Consejo Universitario, formado por las autoridades rectorales, los Decanos de los cinco núcleos, cinco representantes de los profesores, un representante estudiantil de cursos básicos, dos representantes estudiantiles de los cursos profesionales, un representante del Ministerio de Educación y un representante de los egresados, quienes tienen la responsabilidad de asumir colegiadamente la orientación y gestión de la Universidad.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
        <script src="archivos/js/jquery-2.2.3.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
    </body>
</html>
