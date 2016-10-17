<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">

		<div id="features" class="features">
			<div class="container">
				<div class="row">

				<?php
				if (current_user_can("espalda_triceps")) {
				?>

					<div class="column-narrow col3">

						<div class="feature"><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-espalda-y-triceps/"><div class="feature-img1"></div></a><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-espalda-y-triceps/"><h3 class="feature-title">Espalda Tríceps</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de espalda y triceps, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				} else {
				?>

					<div class="column-narrow col3" style="opacity:0.3;">

						<div class="feature"><div class="feature-img1"></div><h3 class="feature-title">Espalda Tríceps</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de espalda y triceps, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				}
				if (current_user_can("piernas_hombros")){
				?>
					<div class="column-narrow col3">

						<div class="feature"><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-piernas-y-hombros/"><div class="feature-img2"></div></a><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-piernas-y-hombros/"><h3 class="feature-title">Piernas Hombros</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios de piernas y hombros, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				} else {
				?>
					<div class="column-narrow col3" style="opacity: 0.3;">

						<div class="feature"><div class="feature-img2"></div><h3 class="feature-title">Piernas Hombros</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios de piernas y hombros, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>


				<?php
				}
				if (current_user_can("pecho_biceps")){
				?>
					<div class="column-narrow col3 last-column">

						<div class="feature"><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-pecho-y-biceps/"><div class="feature-img3"></div></a><a href="http://localhost/fiamma/miweb/index.php/ejercicios-de-pecho-y-biceps/"><h3 class="feature-title">Pecho Bíceps</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de pecho y bíceps, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>
				<?php
				} else {
				?>
					<div class="column-narrow col3 last-column" style="opacity: 0.3;">

						<div class="feature"><div class="feature-img3"></div><h3 class="feature-title">Pecho Bíceps</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de pecho y bíceps, ¡recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>
				<?php
				}
				?>
				</div>
			</div>
		</div>
		<div class="main_publi">
<?php /*---------------------------------------------------------------------------------------------------------*/


	
		global $wpdb;
		if (!is_user_logged_in()) {
			$results = $wpdb->get_results( 'SELECT post_content FROM wp_posts WHERE ID = "162"');
			foreach ($results as $single_result) {
				echo $single_result->post_content;
			}
		}

?>
		</div>

<?php /*---------------------------------------------------------------------------------------------------------*/?>





		<div class="container">
			<div class="portfolio-contents">
		        <div id="portfolio-heading heading" class="portfolio-heading heading">
		            Mira estos vídeos ¡te serán muy útiles!
		        </div>
				<div class="row">
					
					<div class="column column-narrow col3">
						<div class="portfolio-item">
							<div class="portfolio-item-overlay">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/P-vpm14YKNM" frameborder="0" allowfullscreen>
							    </iframe>
			                </div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/EntrenaSergioPeinado">
									<h3 class="portfolio-title">Sergio Peinado</h3>
								</a>
							</div>
						</div>
					</div>

					<div class="column column-narrow col3">
						<div class="portfolio-item">
							<div class="portfolio-item-overlay">
								<iframe width="440" height="195" src="https://www.youtube.com/embed/jo9O_VpTt1U" frameborder="0" allowfullscreen></iframe>
			                </div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/NatyArcilaZ">
									<h3 class="portfolio-title">Naty Arcila</h3>
								</a>
							</div>
						</div>

					</div>

					<div class="column column-narrow col3 last-column">
						<div class="portfolio-item">
							<div class="portfolio-item-overlay">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/6dWYejq7Hu0" frameborder="0" allowfullscreen>
							    </iframe>
							</div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/myBodyDeporte">
									<h3 class="portfolio-title">Rubén Muca</h3>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		<div>

	</div>
</div>

<?php get_footer(); ?>