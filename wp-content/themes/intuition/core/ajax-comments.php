<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );
$campotexto = $_POST['texto'];
$post_id = $_POST['post_id'];
global $wpdb;
$user = get_current_user_id();
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', time());
	if ($user > 0) {
		
		/* Insert the message comment into the DB */
		$sql = $wpdb->insert('comments', array(
					'post_id' => $post_id,
					'user_id' => $user,
					'fecha_creacion' => $date,
					'fecha_edicion' => $date,
					'mensaje' => $campotexto));
		
	} else {
		error_log("no logueado");
	}
?>


<?php 

$myQuery="SELECT user_nicename
		FROM wp_users
		WHERE ID=".$user;

$result = $wpdb->get_results($myQuery);

foreach ($result as $myuser) {
	$userName=$myuser->user_nicename;
	break;
}

$mySecondQuery="SELECT id, mensaje
		FROM comments
		WHERE ((fecha_edicion='".$date."') AND (user_id='".$user."'))";

$id_message = $wpdb->get_results($mySecondQuery);

foreach ($id_message as $item) {

$newComment = "	<div id='comment-id-".$post_id." class='history-comments'>
					<div class='user-comments'>"
						.$userName.": 
					</div>
					<div class='date-comments'>"
						.$date."
						<div class='buttons'>
							<button name='delete' data-toggle='modal' data-target='#delete-modal-".$item->id."' class='button-comments'>Borrar</button>

							<button name='edit' data-toggle='modal' data-target='#edit-modal-".$item->id."' class='button-comments'>Editar</button>

						</div>
					</div>
					
					<div class='message-comments'>"
						.$item->mensaje."
					</div>
				</div>

				<div class='modal fade' id='edit-modal-".$item->id."' tabindex='-1' role='dialog'>
					<div class='modal-dialog' role='document'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' date-dismiss='modal' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
								<h4 class='modal-title'>Editar comentario</h4>
							</div>

							<form method='post' action='/fiamma/miweb/wp-content/themes/intuition/core/edit-comments.php'>
								<div class='modal-body'>
									<textarea name='text'>".$item->mensaje."</textarea>
								</div>
								<div class='modal-footer'>
									<input name='message' type='hidden' value='".$item->mensaje."'/>
									<input name='identificador' type='hidden' value='".$item->id."'/>
									<input name='post_id' type='hidden' value='".$post_id."'/>
									<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
									<button type='submit' class='btn btn-primary'>Guardar cambios</button>
								</div>
							</form>
						</div>
					</div>
				</div>


				<div class='modal fade' id='delete-modal-".$item->id."' tabindex='-1' role='dialog'>
					<div class='modal-dialog' role='document'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
								<h4 class='modal-title'>Borrar comentario</h4>
							</div>

							<form method='post' action='/fiamma/miweb/wp-content/themes/intuition/core/delete-comments.php'>
								<div class='modal-body'>
									<h4>¿Está seguro que desea borrar el comentario?
								</div>

								<div class='modal-footer'>
									<input name='identificador' type='hidden' value='".$item->id."'/>
									<input name='post_id' type='hidden' value='".$post_id."'/>
									<button type='button' class='btn btn-default' data-dismiss='modal'>NO</button>
									<button type='submit' class='btn btn-primary'>SÍ</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			";

echo $newComment;
}

?>