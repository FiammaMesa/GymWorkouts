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

					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/espaldagif.gif">
					</div>
					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/remogif.gif">
					</div>
					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/espaldatriangulogif.gif">
					</div>
					<div class="content-samples column-narrow col4 last-column">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/espaldagif.gif">
					</div>

				</div>

				<div class="row">
					<div class="content-imgs column-narrow col4">
						<img src="/fiamma/miweb/wp-content/uploads/2016/10/espalda06.gif">
					</div>
				</div>

				<div class="row">
					
					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Tríceps</h2>
					</div>
					<div class="row">

						<div class="content-imgs column-narrow col4">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/triceps2.gif">
						</div>
						<div class="content-imgs column-narrow col4">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_triceps.jpg">
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