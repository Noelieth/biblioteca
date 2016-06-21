<?php
error_reporting(E_ALL ^ E_NOTICE);

function write_mysql_log($message, $db)
{
	// Chequea la conexion a la bd
	if( ($db instanceof MySQLi) == false) {
		return array(status => false, message => 'Conexion MySQL inválida');
	}

	$usuario = $_SESSION['usuario'];
	
	// Chequea el campo mensaje
	if($message == '') {
		return array(status => false, message => 'Mensaje vacío');
	}

	// Obtiene la direccion IP
	if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
		$remote_addr = "REMOTE_ADDR_UNKNOWN";
	}

	// obtiene la url de peticion 
	if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
		$request_uri = "REQUEST_URI_UNKNOWN";
	}
	// pasar valores
	$message = $db->escape_string($message);
	$remote_addr = $db->escape_string($remote_addr);
	$request_uri = $db->escape_string($request_uri);

	// Consulta

	$sql = "INSERT INTO sesiones (user_id, remote_addr, request_uri, message) VALUES('$usuario','$remote_addr','$request_uri','$message')";
	
	// Ejecuta la consulta y guarda los datos
	$result = $db->query($sql);
	if($result) {
		return array(status => true);
	}
	else {
		return array(status => false, message => 'Error al escribir en la bd.');
	}
}
?>