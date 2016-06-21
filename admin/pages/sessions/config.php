<?php 
 $db = new mysqli("localhost","root","","biblioteca");
  if ( $db->connect_error ) {
    die( 'Connect Error: ' . $db->connect_errno . ': ' . $db->connect_error );
  }
 ?>
