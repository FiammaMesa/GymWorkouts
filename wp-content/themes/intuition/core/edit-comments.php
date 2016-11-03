<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );	
$identificador = $_POST['identificador'];
$text = $_POST['text'];
$post_id = $_POST['post_id'];
global $wpdb;
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', time());

/* Update a row from a table in the DB */
$sql = $wpdb->update('comments', array(
						'mensaje' => $text,
						'fecha_edicion' => $date),
						array(
							'id' => $identificador
						),
						array(
							'%s',
							'%s'
						),
						array('%d')
					);
		
/* ----- REDIRECCIÓN -----*/
$my_query="SELECT guid
			FROM wp_posts
			WHERE ID='".$post_id."'";
$url = $wpdb->get_results($my_query);
foreach($url as $item) {
	$return = "Location: ".$item->guid;
break;
}
header($return);
?>