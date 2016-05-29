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
if ( ! empty( $_POST ) ) {

    include_once("../../conexion.php");
    mysqli_query("SET NAMES 'utf8'");
    $user_path = $_POST["nombre"];

    // Para Linux
    //mkdir('/var/www/biblioteca/archivos/subida/'.$user_path);
    //chmod('/var/www/biblioteca/archivos/subida/'.$user_path, 0777);
    /*move_uploaded_file($_FILES['imagen']['tmp_name'], '/var/www/biblioteca/subida/'.$user_path.'/'.$_FILES['imagen']['name']);*/

    //$image_path = "subida/".$user_path.'/'.$_FILES['imagen']['name'];

    move_uploaded_file($_FILES['imagen']['tmp_name'],'C:\wamp\www\biblioteca\archivos\subida\\'.$_FILES['imagen']['name']);
    $image_path = $_FILES['imagen']['name'];

  // Insertar
  $sql = "INSERT INTO noticia ( titulo, cuerpo, imagen )

  VALUES ( '{$mysqli->real_escape_string($_POST['nombre'])}',
    '{$mysqli->real_escape_string($_POST['descripcion'])}',
    '{$mysqli->real_escape_string($image_path)}')";

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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Noticias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus-circle"></i> Agregar noticia</a>
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
                    <h3 class="page-header">Inicio / Publicar noticia</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-6 col-sm-offset-2 col-lg-6 col-lg-offset-3 col-md-9">
                    <form method="post" enctype="multipart/form-data" role="form">
                        <div class = "panel panel-green">
                            <div class="panel-heading">Ingresar datos de la noticia</div>
                            <br>
                            <div class="panel-body">
                                <label>Título</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required="required">
                                <br>
                                <label>Contenido</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" required="required"></textarea>
                                <br>
                                <label>Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" required="required">
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline btn-success padding-side" value="Enviar" id = "enviar" data-toggle="modal" data-target="#modalusuario">
                                    <input type="reset" class="btn btn-outline btn-success pull-right padding-side" value="Limpiar" id = "cancelar">
                                    <!-- Modal -->
                                    <div class='modal fade' id='modalusuario' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                    <h4 class='modal-title' id='myModalLabel'>Mensaje</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    ¡Noticia agregada!
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/admin.js"></script>

</body>

</html>
