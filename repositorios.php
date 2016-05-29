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
                        <li class="dropdown active">
                          <a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="1000">
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
                            <li class="active">Repositorios</li>
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
                            <h3><i class="fa fa-database"></i> REPOSITORIOS</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- ////////////CONTENEDOR DE LOS REPOSITORIOS //////////////////////////////////////-->
        <div class = "presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                       <section id="databases">
        <div class="container">
            <div class="box">
                <ul class="db-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">Todos</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".nacionales">Venezuela</a></li>
                    <li class="dropdown hispano">
                      <a href="#" data-filter=".espania" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                          Hispanos<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu">
                          <li><a href="#" data-filter=".espania">España</a></li>
                          <li><a href="#" data-filter=".argentina">Argentina</a></li>
                          <li><a href="#" data-filter=".chile">Chile</a></li>
                          <li><a href="#" data-filter=".colombia">Colombia</a></li>
                          <li><a href="#" data-filter=".ecuador">Ecuador</a></li>
                          <li><a href="#" data-filter=".salvador">El Salvador</a></li>
                          <li><a href="#" data-filter=".mexico">México</a></li>
                          <li><a href="#" data-filter=".peru">Perú</a></li>
                          <li><a href="#" data-filter=".otroshispanos">Otros</a></li>
                      </ul>
                    </li>
                    <li class="dropdown otroidioma">
                      <a href="#" data-filter=".portugues" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                          Otros idiomas<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu">
                          <li><a href="#" data-filter=".portugues">Portugués</a></li>
                          <li><a href="#" data-filter=".ingles">Inglés</a></li>
                      </ul>
                    </li>
                </ul><!--/#filter-->
                <ul class="db-items col-4">
                <div class="col-sm-3">
                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://manglar.uninorte.edu.co/"><i class="fa fa-link"></i> Visitar</a>             
                                </div>
                            </div>
                            <h5>Universidad del Norte.</h5>
                        </div>
                    </li><!--/.bd-item-->

                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.eia.edu.co/"><i class="fa fa-link"></i> Visitar</a>  
                                </div>
                            </div> 
                            <h5>Vitrina EIA.</h5>         
                        </div>
                    </li><!--/.bd-item-->
                   
                    <li class="db-item nacional colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.utp.edu.co/dspace/"><i class="fa fa-link"></i> Visitar</a>        
                                </div> 
                            </div>
                            <h5>Universidad Tecnológica de Pereira.</h5>          
                        </div>           
                    </li><!--/.bd-item-->

                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.ucatolica.edu.co/"><i class="fa fa-link"></i> Visitar</a>          
                                </div>   
                            </div>
                            <h5>Universidad Católica de Colombia.</h5>        
                        </div>           
                    </li><!--/.bd-item-->

                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.javeriana.edu.co/"><i class="fa fa-link"></i> Visitar</a>          
                                </div>  
                            </div>
                            <h5>Universidad Javeriana.</h5>  
                        </div>       
                    </li><!--/.bd-item-->
                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.cesa.edu.co/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>  
                            </div>
                            <h5>Cologeio de Estudios Superiores de Administración.</h5>         
                        </div>           
                    </li><!--/.bd-item-->
                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.urosario.edu.co/"><i class="fa fa-link"></i> Visitar</a>          
                                </div>  
                            </div>
                            <h5>Universidad del Rosario.</h5>  
                        </div>       
                    </li><!--/.bd-item-->
                    <li class="db-item colombia">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repository.unad.edu.co/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>UNAD.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                     <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.udla.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Universidad de las Américas.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.iaen.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Instituto de Altos Estudios Nacionales.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.usfq.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Universidad San Francisco de Quito.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.dspace.uce.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Universidad Central del Ecuador.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibdigital.epn.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Escuela Politécnica Nacional.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.ucsg.edu.ec/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>UCSG.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.ups.edu.ec/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Politécnica Salesiana.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.espoch.edu.ec/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Escuela Superior Politécnica de Chimborazo.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.uleam.edu.ec/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universida Laica "Eloy Alfaro" de Manabí.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.uasb.edu.ec/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Andina de Simón Bolívar.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item ecuador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.flacsoandes.edu.ec/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Flacso ANDES.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://cybertesis.uni.edu.pe/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>CYBERTESIS.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ateneo.unmsm.edu.pe/ateneo/index.jsp"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>ATENEO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.urp.edu.pe/cybertesis/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>CYBERTESIS - URP.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorioacademico.upc.edu.pe/upc/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio Acádemico UPC.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://tesis.usat.edu.pe/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>USAT.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item peru">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://pirhua.udep.edu.pe/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>PIRHUA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.bolivarium.usb.ve/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Bolivarium.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://miunespace.une.edu.ve/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Nueva Esparta.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.ucla.edu.ve/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Centroccidental Lisandro Alvarado.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.repositorium.org/repositorium/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorium.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://riuc.bc.uc.edu.ve/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio Institucional UDO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ri.biblioteca.udo.edu.ve/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio Institucional UDOspace.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item venezuela">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://tesis.luz.edu.ve/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad del Zulia.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://digital.bl.fcen.uba.ar/gsdl-282/cgi-bin/library.cgi"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Digital FCEN - UBA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://tesis.bibdigital.uccor.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Digital.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bdigital.uncu.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>SID.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://rephip.unr.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UNR.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.udesa.edu.ar/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de San Andrés.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://biblioteca.clacso.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>CLACSO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliotecadigital.uca.edu.ar/greenstone/cgi-bin/library.cgi"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UCA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://sedici.unlp.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UNLP.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ricabib.cab.cnea.gov.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Leo Falicov.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item argentina">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ediblio.unsa.edu.ar/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>RIUNSa.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item chile">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositoriodigital.uct.cl/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Católica de TEMUCO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item chile">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://cybertesis.uach.cl/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Austral de Chile.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item chile">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace2.conicyt.cl/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>CONICYT.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item chile">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.unab.cl/xmlui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Andrés Bello.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item chile">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bibliotecamuseodelamemoria.cl/gsdl/cgi-bin/library.cgi?l=es"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Digital Museo de la Memoria...</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.rad.unam.mx/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Nacional Autóma de México.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://catedra.ruv.itesm.mx/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>EGE.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://eprints.uanl.mx/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UANL.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://quijote.biblio.iteso.mx/catia/coneicc/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>ITESO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.crea.udg.mx/index.jsp"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Veracruzana.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://cdigital.uv.mx/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UREK.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dgsa.uaeh.edu.mx:8080/bibliotecadigital/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UAEH.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item mexico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.remeri.org.mx/portal/index.html"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Remeri.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item salvador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://biblioteca.utec.edu.sv:8080/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Tecnológica de El Salvador.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item salvador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://rd.udb.edu.sv:8080/jspui/?locale=es"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Don Bosco.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item salvador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.redicces.org.sv/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>REDICCES.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item salvador">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ri.ues.edu.sv/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Sistema Bibliotecario Univeridad de El Salvador.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://riuma.uma.es/xmlui"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>BU Universidad de Málaga.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://digibug.ugr.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>BU Universidad de Granada.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ruja.ujaen.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UJA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://rabida.uhu.es/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Huelva.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.ual.es/jspui/#.VzeVFfnhC70"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Almería.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.racordoba.es/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Real Academía de Córdoba.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.repositoriosalud.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio Junta de Andalucía.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bibliotecavirtualdeandalucia.es//opencms"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca de Junta de Andalucía.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.unia.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Internacional de Andalucía.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://ruidera.uclm.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Castilla - La Mancha.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.upct.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Politécnica de Cartagena.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://digitum.um.es/xmlui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Murcia.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://rua.ua.es/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Alicante.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bivaldi.gva.es/es/cms/elemento.cmd?id=estaticos/paginas/inicio.html"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Valenciana Digital.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ibdigital.uib.es/greenstone/cgi-bin/library.cgi"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de les Illes Balears.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://riunet.upv.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Politécnica de Valencia.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositori.uji.es/xmlui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad JAUME.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://gredos.usal.es/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Salamanca.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://uvadoc.uva.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Valladolid.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliotecadigital.jcyl.es/i18n/estaticos/contenido.cmd?pagina=estaticos/inicio"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Digital de Castilla y León.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://buleria.unileon.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Buleria.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ria.asturias.es/RIA/index.jsp"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Asturias.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.galiciana.bibliotecadegalicia.xunta.es/gl/estaticos/contenido.cmd?pagina=estaticos/presentacion"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca de Galicia.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.usc.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>USC.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ruc.udc.es/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Coruña.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://avalia-t.sergas.es/Paxinas/web.aspx"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Junta de Galicia.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.unican.es/xmlui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Cantabria.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliotecavirtual.larioja.org/bvrioja/es/estaticos/contenido.cmd?pagina=estaticos/presentacion"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Gobierno de La Rioja.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.memoriadigitalvasca.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Memoria Digital Vasca.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.liburuklik.euskadi.net/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Gobierno de Vasca.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bilbao.net/bld"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca Digital Bilbao.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://hedatuz.euskomedia.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>DATUZ.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://addi.ehu.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Vacso.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://edtb.euskomedia.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>eDTB.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dadun.unav.edu/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>DADUN.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://academica-e.unavarra.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UPNA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositori.udl.cat/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Lleida.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://citarea.cita-aragon.es/citarea/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Gobierno de Aragón.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.cortesaragon.es/fondoHistorico/i18n/estaticos/contenido.cmd?pagina=estaticos/presentacion"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Parlamento de Aragon.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://diobma.udg.edu/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Girona.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://zaguan.unizar.es/?ln=en"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Zaragoza.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositori.upf.edu/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UPF.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.intangiblecapital.org/index.php/ic"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Intangible Capital.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.tdx.cat/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>TDR.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://diposit.ub.edu/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad de Barcelona.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ddd.uab.cat/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UAB.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://upcommons.upc.edu/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UPC.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.uah.es/dspace/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>eBUAH.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://abacus.universidadeuropea.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Europea.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ddfv.ufv.es/xmlui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UFV.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://repositorio.uam.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UAM.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://oa.upm.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Politécnica.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.larramendi.es/i18n/estaticos/contenido.cmd?pagina=estaticos/inicio"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Fundación Ignacio Larramendi.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://riberdis.cedd.net/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Riberdis.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://www.fundacionmapfre.org/documentacion/publico/i18n/consulta/busqueda.cmd"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Fundación Mapfre.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://www.fundacionmapfre.org/museoseg/es/estaticos/contenido.cmd?pagina=indice"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Fundación Mapfre Museos.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliotecadigital.rah.es/dgbrah/i18n/estaticos/contenido.cmd?pagina=estaticos/presentacion"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>RAH.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://ojs.diffundit.com/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>OJS.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.memoriademadrid.es/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Memoria de Madrid.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://travesia.mcu.es/portalnb/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Travesía.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://digital.march.es/ceacs-ir/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Fundación Juan March.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espania">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliotecavirtual.ranm.es/ranm/es/estaticos/contenido.cmd?pagina=estaticos/presentacion"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Digibib.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros cuba">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://dspace.geotech.cu/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio de Información Geográfica.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros puertorico">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.upr.edu:8080/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>UPR.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros guadalupe">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.manioc.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Manioc.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros costarica">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.repositorio.una.ac.cr/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Universidad Nacional Costa Rica.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros costarica">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.kerwa.ucr.ac.cr/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Repositorio Kérwá.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros costarica">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://repositorio.uned.ac.cr/reuned/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>ReUNED.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros costarica">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bibliodigital.itcr.ac.cr/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>ITCR.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otros urugay">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/repositorios/item.png">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://coleccionesdigitales.bibna.gub.uy/greenstone/cgi-bin/library.cgi?e=d-01000-00---off-0primeros--00-1----0-10-0---0---0direct-10---4-------0-1l--11-es-50---20-about---00-3-1-00-0-0-11-1-0utfZz-8-00&a=p&p=about#"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>BIBNA.</h5>       
                        </div>         
                    </li><!--/.bd-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section> 
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
        <script src="archivos/js/jquery.isotope.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
        <script src="archivos/js/dbaa.js"></script>
        <script src="archivos/js/repositorios.js"></script>
    </body>
</html>
