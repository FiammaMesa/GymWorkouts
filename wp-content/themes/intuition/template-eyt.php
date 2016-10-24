<?php /* Template Name: Espalda y Tríceps */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<?php
		if (current_user_can("espalda_triceps")) {
		?>

			<div class="content">
				<div class="row">

					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Espalda</h2>
					</div>

		        	<?php
		        		global $wpdb;
		        		$results = $wpdb->get_results('SELECT * 
														FROM wp_posts 
														WHERE ID IN(SELECT object_id
																	FROM wp_term_relationships
																	WHERE term_taxonomy_id IN ( SELECT term_id 
																								FROM wp_terms 
																								WHERE ((slug="dorsales") or (slug="lumbares") or (slug="trapecios")))
																	)
		        									 ');
		        		//"<div class='mycomments'>"
		        		foreach ($results as $result){
		        			?> <div class="content-samples column-narrow col4"> <?php
			        				$pos = strpos($result->post_content, "<form");
			        				$item = substr($result->post_content, 0, $pos-30);
			        				echo "<a href=".$result->guid.">";
			        				echo $item;
			        				echo "</a>";
		        			?> </div> <?php
		        		}
		        	?>


				</div>


				<div class="row">
					
					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Tríceps</h2>
					</div>
					<div class="row">
						<?php
		        		
		        		$results = $wpdb->get_results('SELECT * 
														FROM wp_posts 
														WHERE ID IN( SELECT object_id
																	FROM wp_term_relationships
																	WHERE term_taxonomy_id IN ( SELECT term_id 
																								FROM wp_terms 
																								WHERE slug="triceps") 
		        													)
		        									 ');
		        		foreach ($results as $result){
		        			?> <div class="content-samples column-narrow col4"> <?php
									$pos = strpos($result->post_content, "<form");
			        				$item = substr($result->post_content, 0, $pos-30);
			        				echo "<a href=".$result->guid.">";
			        				echo $item;
			        				echo "</a>";
		        			?> </div> <?php
		        		}
		        		?>
						<div class="content-imgs column-narrow col4">
				        	
						</div>
						<div class="content-imgs column-narrow col4">
				        	
						</div>
					</div>
				
				</div>
			</div>
		<?php
		} else {
		?>
			<div class="content">
				<h3>Lo sentimos, no tiene permisos para ver esta página</h3>
			</div>
		<?php
		}
		?>
	</div>
</div>

<?php get_footer(); ?>