<?php /* Template Name: Perfil */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<div class="content">
			<h2 class="feature-content" id="profile-title">Tus datos personales:</h2>

			
				<div class="results">
					<?php 
					global $wpdb;
					$myUser = get_current_user_id();
					$myQuery = "SELECT user_nicename, user_email
								FROM wp_users
								WHERE ID = '".$myUser."'";

					$results = $wpdb->get_results($myQuery);
					foreach($results as $item){
						?>
						<div class="profile-data">
							<div class="text-data">
								<div class="father">
									<label id="profile-label" class="son" for="name"> <?php echo $item->user_nicename; ?> </label>
									<button id="profile-button" type='submit' class='button son'>Cambiar nombre</button>
								</div>
								<div class="father_chungo">
									<input id="profile-pass" type="text" class="son_chungo" name="pass"/>
									<button id="profile-button" type='submit' class='button son_chungo'>Cambiar contraseña</button>
								</div>
								<div class="father">
									<label id="profile-label" class="son" for="espaldatriceps">Espalda y Triceps</label>
									<input id="profile-checkbox" class="son" type="checkbox" name="espaldatriceps"/>
								</div>
								<div class="father">
									<label id="profile-label" class="son" for="piernashombros">Piernas y Hombros</label>
									<input id="profile-checkbox" class="son" type="checkbox" name="piernashombros"/>
								</div>
								<div class="father">
									<label id="profile-label" class="son" for="pechobiceps">Pecho y Biceps</label>
									<input id="profile-checkbox" class="son" type="checkbox" name="pechobiceps"/>
								</div>
								<button id="perms-button" class="button" type="submit">Solicitar permisos</button>
							</div>

							<div class="image-data">
								<div class="profile-img"></div>
								<button id="image-button" class="button" type="submit">Cambiar imágen</button><br>
							</div>

						</div>
					<?php
					}
					?>
				</div>
					
		</div>
	</div>
</div>

<?php get_footer(); ?>