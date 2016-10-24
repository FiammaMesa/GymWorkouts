<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<!--<div class="post-image">
		<?php cpotheme_postpage_image(); ?>		
	</div>-->	
	<?php $current_post_id = get_the_ID(); ?>
	<div class="post-body">
		<!--<?php cpotheme_postpage_title(); ?>
		<div class="post-byline">
			<?php cpotheme_postpage_date(); ?>
			<?php cpotheme_postpage_author(); ?>
			<?php cpotheme_postpage_categories(); ?>
			<?php cpotheme_postpage_comments(); ?>
			<?php cpotheme_edit(); ?>
		</div>-->
		<div class="post-content">
			<?php cpotheme_postpage_content(); ?>
		</div>

		<div class="history-comments">
			<?php 
			global $wpdb;
			$my_query = ('SELECT user_nicename, mensaje, comments.id as identificador, fecha_edicion, user_id, post_id
									     FROM wp_users, comments
									     WHERE (wp_users.ID = comments.user_id) and (post_id = "'.$current_post_id.'")
									     ORDER BY fecha_edicion desc
										');
			$result = $wpdb->get_results($my_query);
			
			foreach ($result as $item){
				$mensaje = $item->mensaje;
				$identificador = $item->identificador;
				if (get_current_user_id() == $item->user_id){
					$nameid = "comment-id-".$item->identificador;
					
					?><div id=<?php echo $nameid; ?> class="history-comments">
						<div class="user-comments"><?php
							echo $item->user_nicename . ": ";
						?></div>

						<div class="date-comments"><?php
							echo $item->fecha_edicion;
							?><div class="buttons">
								
								
									
									<button name="delete" data-toggle="modal" data-target=<?php echo "#delete-modal-".$identificador; ?> class="button-comments">Borrar</button>
						
								<!--<form name="edit" action="http://localhost/fiamma/miweb/wp-content/themes/intuition/core/edit-comments.php">-
									<input name="message" type="hidden" value=<?php echo $item->mensaje ?> />
									<input name="identificador" type="hidden" value=<?php echo $item->identificador ?> />
									<input name="post_id" type="hidden" value=<?php echo $item->post_id ?> />-->
									<button name="edit" data-toggle="modal" data-target=<?php echo "#edit-modal-".$identificador; ?>  class="button-comments">Editar</button>
								<!--</form>-->
								
								

							</div>

						</div>
						
						<div class="message-comments"><?php
							error_log("Cajita-".$item->identificador);
							echo "\"".$item->mensaje."\"";
						?></div>
					</div>


					<!-- ************ MODAL EDITAR ************ -->

					<div class="modal fade" id=<?php echo "edit-modal-".$identificador; ?> tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Editar comentario</h4>
								</div>

								<form method="post" action="http://localhost/fiamma/miweb/wp-content/themes/intuition/core/edit-comments.php">
									<div class="modal-body">
										<textarea name="text"><?php echo $item->mensaje; ?></textarea>
									</div>
									<div class="modal-footer">
										<input name="message" type="hidden" value=<?php echo $item->mensaje ?> />
										<input name="identificador" type="hidden" value=<?php error_log("Cargo el modal");echo $item->identificador ?> />
										<input name="post_id" type="hidden" value=<?php echo $item->post_id ?> />
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										<button type="submit" class="btn btn-primary">Guardar cambios</button>
									</div>
								</form>

							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->


					<!-- ************ MODAL BORRAR ************ -->

					<div class="modal fade" id=<?php echo "delete-modal-".$identificador; ?> tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Borrar comentario</h4>
								</div>

								<form method="post" action="http://localhost/fiamma/miweb/wp-content/themes/intuition/core/delete-comments.php">
									<div class="modal-body">
										<h4>¿Está seguro que desea borrar el comentario?
									</div>
									<div class="modal-footer">
										<input name="identificador" type="hidden" value=<?php echo $item->identificador ?> />
									<input name="post_id" type="hidden" value=<?php echo $item->post_id ?> />
										<button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
										<button type="submit" class="btn btn-primary">SÍ</button>
									</div>
								</form>

							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->



					<?php 
				} else {
					$nameid = "comment-id-".$item->identificador;
					
					?><div id=<?php echo $nameid; ?> class="history-comments">
						<div class="user-comments"><?php
							echo $item->user_nicename . ": ";
						?></div>
						<div class="date-comments"><?php
							echo $item->fecha_edicion;
						?></div>
						<div class="message-comments"><?php
							echo "\"".$item->mensaje."\"";
						?></div>
					</div><?php 
				}
			}
			?>
		</div>
		<!--<?php if(is_singular('post')) cpotheme_postpage_tags(false, '', '', ''); ?>
		<?php cpotheme_postpage_readmore('button'); ?>-->
	</div>
	<div class="clear"></div>

</article>