<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<!--<div class="post-image">
		<?php cpotheme_postpage_image(); ?>		
	</div>-->	
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
			$result = $wpdb->get_results('SELECT user_nicename, mensaje, comments.id as identificador, fecha_edicion, user_id
									     FROM wp_users, comments
									     WHERE (wp_users.ID = comments.user_id)
									     ORDER BY fecha_edicion desc
										');
			
			foreach ($result as $item){
	
				if (get_current_user_id() == $item->user_id){

					$nameid = "comment-id-".$item->identificador;
					
					?><div id=<?php echo $nameid; ?> class="history-comments">
						<div class="user-comments"><?php
							echo $item->user_nicename . ": ";
						?></div>

						<div class="date-comments"><?php
							echo $item->fecha_edicion;
							
							?><div class="buttons">
								<div class="button-comments">Borrar</div>
								<div class="button-comments">Editar</div>

							</div>

						</div>
						
						<div class="message-comments"><?php
							echo "\"".$item->mensaje."\"";
						?></div>
					</div><?php 

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