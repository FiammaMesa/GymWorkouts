<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );
$campotexto = $_POST['campotexto'];
$post_id = $_POST['post_id'];
global $wpdb;
$user = get_current_user_id();
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', time());
	if ($user > 0) {
		
		$sql = $wpdb->insert('comments', array(
					'post_id' => $post_id,
					'user_id' => $user,
					'fecha_creacion' => $date,
					'fecha_edicion' => $date,
					'mensaje' => $campotexto));
		
		//$wpdb->query($sql);
	} else {
		error_log("no logueado");
	}
?>


<?php 
$result = $wpdb->get_results('SELECT user_nicename
								FROM wp_users
								WHERE ID IN (SELECT user_id
											FROM comments)');

/* ------- REDIRECCIÓN ------*/
$my_query="SELECT guid
			FROM wp_posts
			WHERE ID='".$post_id."'";
$url = $wpdb->get_results($my_query);
foreach($url as $item) {
	$return = "Location: ".$item->guid."#history-comments";
break;
}
header($return);
?>



?>