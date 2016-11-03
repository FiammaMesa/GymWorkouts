<?php /* Template Name: Search */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">

		<?php

		/* Function to prove for checking if the user is Log In or Log Out */
		if (is_user_logged_in()) {
		?>
			<div class="row">
				<div class="column-narrow col3">

					<div class="feature search">

						<div class="feature-img1">
							
						</div>

						<h3 class="feature-title ident title">Espalda Tríceps</h3>
					</div>

				</div>

				<div class="column-narrow col3">

					<div class="feature search">

						<div class="feature-img2">
		
						</div>
					
						<h3 class="feature-title ident title">Piernas Hombros</h3>
					</div>

				</div>

				<div class="column-narrow col3 last-column">

					<div class="feature search">
					
							<div class="feature-img3">
						
							</div>
					
							<h3 class="feature-title ident title">Pecho Bíceps</h3>
					</div>

				</div>
			</div>

			<div class="row result" id="result">


			</div>
		<?php
		} else {
		?>
			<div class="row">
				<h2> Lo sentimos, no tiene permisos para ver esto</h2>
			</div>
		<?php
		}
		?>
	</div>
</div>
<?php get_footer(); ?>