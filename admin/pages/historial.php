<?php
  session_start();
 ?>
 <?php

  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
  }
  include_once('sessions/config.php');
  include_once('historial-usuarios.php');
  ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIBLIOTECA GENERAL - PANEL DE ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../archivos/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../sources/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../archivos/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">BIBLIOTECA GENERAL - PANEL DE CONTROL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown usuario-->
                <?php
                    if (isset($_SESSION['usuario'])) {
                        if(($_SESSION['nivel'] == 1)){
                            echo"<li class='dropdown'>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                        <i class='fa fa-user fa-fw'></i>  <i class='fa fa-caret-down'></i>";
                                echo "<div class='pull-left'>Bienvenido, ".$_SESSION['usuario']."</div></a>";
                             echo"<ul class='dropdown-menu dropdown-user'>
                                    <li><a href='../../archivos/manual-de-usuario.pdf'><i class='fa fa-book fa-fw'></i>Manual de usuario</a>
                                    </li>
                                    <li class='divider'></li>
                                    <li><a href='../../index.php?logout=true'><i class='fa fa-sign-out fa-fw'></i>Cerrar sesión</a>
                                    </li>
                                </ul>
                            </li>";
                        }
                    }
                else{
                    header("location:../../login.php");
                }
            ?>
    </ul>
            <!-- /.navbar-top-links -->

            <!-- ///////////////////MENU LATERAL ////////////////////-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-th-large fa-fw"></i> Panel</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="agregarusuario.php"><i class="fa fa-plus-circle"></i> Agregar usuario</a>
                                </li>
                                <li>
                                    <a href="tables.php?tipo=usuario&op=mostrar"><i class="fa fa-edit"></i> Listar/Editar usuario</a>
                                </li>
                                <li class="active">
                                    <a href="historial.php"><i class="fa fa-history"></i> Historial de acceso</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Noticias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="publicarnoticia.php"><i class="fa fa-plus-circle"></i> Agregar noticia</a>
                                </li>
                                <li>
                                    <a href="tables.php?tipo=noticia&op=mostrar"><i class="fa fa-edit"></i> Listar/Editar noticia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../../index.php"><i class="fa fa-home fa-fw"></i> Página de Inicio</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- /////////////////////CONTENEDOR CENTRAL ////////////////////-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Inicio / Historial de acceso de usuarios</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10 col-sm-12 col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Panel de notificaciones
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php 
                                if (! isset($rs)) {
                                echo'<div>No hay elementos en la bd.</div>';
                                }else{ echo $contenido_historial;?>
                           </div>
                           <?php echo $paginacion;}?>
                        </div><!-- /.panel-body -->
                    </div>
                </div> <!-- col-->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../archivos/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../archivos/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../sources/js/admin.js"></script>

</body>

</html>
