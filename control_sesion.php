<?php
header('Content-Type: text/html; charset=iso-8859-1');
session_start();

if(!empty($_SESSION)){
	require_once('usuarios.php');
	$EMAILS = array_column($USUARIOS,"EMAIL");
	if(in_array($_SESSION['EMAIL'],$EMAILS)){
		// Máxima duración de sesión activa en hora
		define( 'MAX_SESSION_TIEMPO', 600 * 1 );

		// Controla cuando se ha creado y cuando tiempo ha recorrido 
		if ( isset( $_SESSION[ 'ULTIMA_ACTIVIDAD' ] ) && 
			 ( time() - $_SESSION[ 'ULTIMA_ACTIVIDAD' ] > MAX_SESSION_TIEMPO ) ) {

			// Si ha pasado el tiempo sobre el limite destruye la session
			destruir_session();
			header("Location:http://localhost/intranet1/login.php?sf=1");

			exit;
		}

		$_SESSION[ 'ULTIMA_ACTIVIDAD' ] = time();
	}else{
		header("Location: http://localhost/intranet1/login.php");
		exit;	
	}
	
}else{
	header("Location: http://localhost/intranet1/login.php");
	exit;
}
// Función para destruir y resetear los parámetros de sesión
function destruir_session() {

    $_SESSION = array();
    if ( ini_get( 'session.use_cookies' ) ) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - MAX_SESSION_TIEMPO,
            $params[ 'path' ],
            $params[ 'domain' ],
            $params[ 'secure' ],
            $params[ 'httponly' ] );
    }

    @session_destroy();
}


	 // LOG USUARIOS

	// 	include("admin_historial/conexion.php");

	// 	$URL_FULL = $_SERVER['REQUEST_URI'];
	// 	$URL = str_replace("/intranet/","",$URL_FULL);
	// 	$FECHA = date("Y-m-d",strtotime("-3 hours"));
	// 	$HORA = date("H:i:s",strtotime("-3 hours"));
    // $EMAIL = $_SESSION['EMAIL'];

	// 	mysqli_query($conexion,"INSERT INTO datos_acceso(EMAIL,URL,FECHA,HORA) VALUES ('$EMAIL','$URL','$FECHA','$HORA')");




?>