<?php /* Template Name: Piernas y Hombros */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<?php
		if (current_user_can("piernas_hombros")) {
		?>

			<div class="content">
	
				<div class="row">

					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Piernas</h2>
					</div>

					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/cuadriceps.gif">
					</div>
					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/cuadriceps1.gif">
					</div>

				</div>

				<div class="row">
					<div class="content-imgs column-narrow col4">
						<img src="/fiamma/miweb/wp-content/uploads/2016/10/sentadilla.png">
					</div>
			                <div class="content-imgs column-narrow col4">
						<img src="/fiamma/miweb/wp-content/uploads/2016/10/zancada.png">
					</div>
				</div>

				<div class="row">
					
					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Hombros</h2>
					</div>
					<div class="row">

						<div class="content-imgs column-narrow col4">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_hombro.jpg">
						</div>
						<div class="content-imgs column-narrow col4">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_hombro1.jpg">
						</div>
			                        <div class="content-imgs column-narrow col4">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_hombro3.jpg">
						</div>
			                        <div class="content-imgs column-narrow col4 last-column">
				        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_hombro4.jpg">
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