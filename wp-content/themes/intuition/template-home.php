<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
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

						<div class="feature"><a href="/fiamma/miweb/index.php/ejercicios-de-espalda-y-triceps/"><div class="feature-img1"></div></a><a href="/fiamma/miweb/index.php/ejercicios-de-espalda-y-triceps/"><h3 class="feature-title">Espalda Tríceps</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios para espalda y triceps, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				} else {
				?>

					<div class="column-narrow col3" style="opacity:0.3;">

						<div class="feature"><div class="feature-img1"></div><h3 class="feature-title">Espalda Tríceps</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios para espalda y triceps, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				}
				if (current_user_can("piernas_hombros")){
				?>
					<div class="column-narrow col3">

						<div class="feature"><a href="/fiamma/miweb/index.php/ejercicios-de-piernas-y-hombros/"><div class="feature-img2"></div></a><a href="/fiamma/miweb/index.php/ejercicios-de-piernas-y-hombros/"><h3 class="feature-title">Piernas Hombros</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios de piernas y hombros, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>

				<?php
				} else {
				?>
					<div class="column-narrow col3" style="opacity: 0.3;">

						<div class="feature"><div class="feature-img2"></div><h3 class="feature-title">Piernas Hombros</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de ejercicios de piernas y hombros, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>


				<?php
				}
				if (current_user_can("pecho_biceps")){
				?>
					<div class="column-narrow col3 last-column">

						<div class="feature"><a href="/fiamma/miweb/index.php/ejercicios-de-pecho-y-biceps/"><div class="feature-img3"></div></a><a href="/fiamma/miweb/index.php/ejercicios-de-pecho-y-biceps/"><h3 class="feature-title">Pecho Bíceps</h3></a>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de pecho y bíceps, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>
				<?php
				} else {
				?>
					<div class="column-narrow col3 last-column" style="opacity: 0.3;">

						<div class="feature"><div class="feature-img3"></div><h3 class="feature-title">Pecho Bíceps</h3>
							<div class="feature-content">
								<p>Aquí encontraras una colección de distintos ejercicios de pecho y bíceps, ¡Recuerda escoger como mínimo tres de cada uno!</p>
							</div>
						</div>

					</div>
				<?php
				}
				?>
				</div>
			</div>
		</div>
			
<?php /*---------------------------------------------------------------------------------------------------------*/
		global $wpdb;
		if (!is_user_logged_in()) {
			$results = $wpdb->get_results( 'SELECT post_content FROM wp_posts WHERE ID = "162"');
			foreach ($results as $single_result) {
				echo $single_result->post_content;
			}
		}

?>

	





<?php /*---------------------------------------------------------------------------------------------------------*/?>





		<div class="container">
			<div class="portfolio-contents">
		        <div id="portfolio-heading heading" class="portfolio-heading heading">
		            Mira estos vídeos ¡te serán muy útiles!
		        </div>
				<div class="row">
					
					<div class="column column-narrow col3 lines">
						<div class="portfolio-item">

							<div class="portfolio-item-overlay">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/P-vpm14YKNM" frameborder="0" allowfullscreen>
							    </iframe>
			                </div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/EntrenaSergioPeinado">
									<h3 class="portfolio-title">Sergio Peinado</h3>
								</a>
								<div class="icon1 icon-opacity minus-icon plus-icon">

								</div>
							</div>

							<div class="portfolio-item-overlay slice-video just-for-view1">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/WxEdJAGjE3Y" frameborder="0" allowfullscreen></iframe>
			                </div>
							

							<div class="portfolio-item-overlay slice-video just-for-view1">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/zjrH2fLnh1I" frameborder="0" allowfullscreen></iframe>
			                </div>

							<div class="portfolio-item-overlay slice-video just-for-view1">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/Lccxvj8RmAc" frameborder="0" allowfullscreen></iframe>
			                </div>
							

						</div>
					</div>

					<div class="column column-narrow col3 lines">
						<div class="portfolio-item">
							<div class="portfolio-item-overlay">
								<iframe width="440" height="195" src="https://www.youtube.com/embed/jo9O_VpTt1U" frameborder="0" allowfullscreen></iframe>
			                </div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/NatyArcilaZ">
									<h3 class="portfolio-title">Naty Arcila</h3>
								</a>
								<div class="icon2 icon-opacity minus-icon plus-icon">

								</div>
							</div>

							<div class="portfolio-item-overlay slice-video just-for-view2">
								<iframe width="440" height="195" src="https://www.youtube.com/embed/HikHK97iSmI" frameborder="0" allowfullscreen></iframe>
			                </div>

			                <div class="portfolio-item-overlay slice-video just-for-view2">
								<iframe width="440" height="195" src="https://www.youtube.com/embed/jx5bl6klrfs" frameborder="0" allowfullscreen></iframe>
			                </div>

			                <div class="portfolio-item-overlay slice-video just-for-view2">
								<iframe width="440" height="195" src="https://www.youtube.com/embed/JLL6iDswYB0" frameborder="0" allowfullscreen></iframe>
			                </div>
						</div>

					</div>

					<div class="column column-narrow col3 last-column lines">
						<div class="portfolio-item">
							<div class="portfolio-item-overlay">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/6dWYejq7Hu0" frameborder="0" allowfullscreen>
							    </iframe>
							</div>
							<div class="portfolio-item-title">
								<a href="https://www.youtube.com/user/myBodyDeporte">
									<h3 class="portfolio-title">Rubén Muca</h3>
								</a>
								<div class="icon3 icon-opacity minus-icon plus-icon">

								</div>
							</div>

							<div class="portfolio-item-overlay slice-video just-for-view3">
							   <iframe width="440" height="195" src="https://www.youtube.com/embed/NEyYh8pHO2Q" frameborder="0" allowfullscreen></iframe>
							</div>

							<div class="portfolio-item-overlay slice-video just-for-view3">
							    <iframe width="440" height="195" src="https://www.youtube.com/embed/qLvQ-mOs0KE" frameborder="0" allowfullscreen></iframe>
							</div>

							<div class="portfolio-item-overlay slice-video just-for-view3">
							  <iframe width="440" height="195" src="https://www.youtube.com/embed/PKgYRGyStFU" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

					</div>
				</div>
			</div>
		<div>

	</div>
</div>

<?php get_footer(); ?>