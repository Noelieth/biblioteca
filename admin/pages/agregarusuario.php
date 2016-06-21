<?php
  session_start();
 ?>
 <?php

  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
  }
  ?>
<?php
// pasa el form si no está vacío
if ( ! empty( $_POST ) ) {

    include_once("../../conexion.php");
    mysqli_query("SET NAMES 'utf8'");

      // Insertar
  $sql = "INSERT INTO usuario ( nombre, apellido, usuario, email, password, nivel)

  VALUES ( '{$mysqli->real_escape_string($_POST['nombre'])}',
    '{$mysqli->real_escape_string($_POST['apellido'])}',
    '{$mysqli->real_escape_string($_POST['nomusuario'])}',
    '{$mysqli->real_escape_string($_POST['correo'])}',
    '{$mysqli->real_escape_string($_POST['password'])}',
    '{$mysqli->real_escape_string($_POST['nivel'])}')";

  $insert = $mysqli->query($sql);

  // Respuesta del sql
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }

  // Cerrar conexion y retorno
  $mysqli->close();
  header("location: admin.php");

}
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
                                <li class="active">
                                    <a href="agregarusuario.php"><i class="fa fa-plus-circle"></i> Agregar usuario</a>
                                </li>
                                <li>
                                    <a href="tables.php?tipo=usuario&op=mostrar"><i class="fa fa-edit"></i> Listar/Editar usuario</a>
                                </li>
                                <li>
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
                <div class="col-md-12">
                    <h3 class="page-header">Inicio / Agregar usuario</h3>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Nota</div>
                        <div class="panel-body">
                            <p>El usuario "nivel 1", será administrador de este portal web.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <form method="post" enctype="multipart/form-data" role="form">
                        <div class = "panel panel-primary">
                            <div class="panel-heading">Ingresar datos del usuario</div>
                            <div class="panel-body">
                                <label>Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required="required">
                                <br>
                                <label>Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required="required">
                                <br>
                                <label>Nombre de usuario</label>
                                <input type="text" class="form-control" id="nomusuario" name="nomusuario" required="required">
                                <br>
                                <label>Email</label>
                                <input type="mail" class="form-control" id="correo" name="correo" required="required">
                                <br>
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required="required">
                                <br>
                                <label>Nivel</label>
                                <input type="text" class="form-control" id="nivel" name="nivel" required="required">
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline btn-primary padding-side" value="Enviar" id = "enviar" data-toggle="modal" data-target="#modalusuario">
                                    <input type="reset" class="btn btn-outline btn-primary pull-right padding-side" value="Limpiar" id = "cancelar">
                                    <!-- Modal -->
                                    <div class='modal fade' id='modalusuario' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                    <h4 class='modal-title' id='myModalLabel'>Mensaje</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    ¡Usuario agregado!
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-primary' data-dismiss='modal'>Ok</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </div>
                            </div> <!-- panel body -->
                        </div> <!-- panel primary -->
                    </form>
                    <br>
                    <br>
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
