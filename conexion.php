<?php 
 $item_por_pag = 1;
 $mysqli = new mysqli("localhost","root","","biblioteca");
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
 ?>
