<?php /* Template Name: Pecho y Biceps */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
			<?php
			if (current_user_can("pecho_biceps")) {
			?>

			<div class="content">

				<div class="row">

					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Pecho</h2>
					</div>

					<?php

		        		global $wpdb;
		        		$results = $wpdb->get_results('SELECT * 
														FROM wp_posts 
														WHERE ID IN( SELECT object_id
																	FROM wp_term_relationships
																	WHERE term_taxonomy_id IN ( SELECT term_id 
																								FROM wp_terms 
																								WHERE slug="pecho") 
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

				</div>

				<div class="row">
					
					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Bíceps</h2>
					</div>
					<div class="row">

						<?php

		        		global $wpdb;
		        		$results = $wpdb->get_results('SELECT * 
														FROM wp_posts 
														WHERE ID IN( SELECT object_id
																	FROM wp_term_relationships
																	WHERE term_taxonomy_id IN ( SELECT term_id 
																								FROM wp_terms 
																								WHERE slug="biceps") 
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