<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );
$campotexto = $_POST['campotexto'];

	$user=get_current_user_id();
	if ($user > 0) {
		echo $campotexto;;
	} else {
		error_log("no logueado");
	}

?>