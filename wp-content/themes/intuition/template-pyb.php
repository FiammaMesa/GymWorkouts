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

					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/pec1.gif">
					</div>
					<div class="content-samples column-narrow col4">
			        	<img src="/fiamma/miweb/wp-content/uploads/2016/10/pec2.gif">
					</div>
					

				</div>

				<div class="row">
					<div class="content-imgs column-narrow col4">
						<img src="/fiamma/miweb/wp-content/uploads/2016/10/pecho.jpg">
					</div>
			                <div class="content-imgs column-narrow col4">
						<img src="/fiamma/miweb/wp-content/uploads/2016/10/pecho2.jpg">
					</div>
				</div>

				<div class="row">
					
					<div class="content-text">
						<h2 class="feature-content">Ejercicios de Bíceps</h2>
					</div>
					<div class="row">

						<div class="content-imgs column-narrow col4">
						     <img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_biceps.jpg">
					        </div>
			                        <div class="content-imgs column-narrow col4">
						     <img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_biceps1.jpg">
					        </div>
			                        <div class="content-imgs column-narrow col4">
						     <img src="/fiamma/miweb/wp-content/uploads/2016/10/ejercicios_biceps2.jpg">
					        </div>
			                        <div class="content-imgs column-narrow col4 last-column">
						     <img src="/fiamma/miweb/wp-content/uploads/2016/10/biceps.jpg">
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