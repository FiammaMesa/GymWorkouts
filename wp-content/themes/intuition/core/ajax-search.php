<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );
$category = $_POST['titulo'];
$final="XY";
switch ($category) {
	case "Espalda Tríceps":
		global $wpdb;
		$result = $wpdb->get_results('SELECT *
									  FROM wp_posts
									  WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="triceps")
													)
									');

		foreach($result as $item){
			echo $item->post_title; 
		}
		

		$result = $wpdb->get_results('SELECT post_content
									  FROM wp_posts
									  WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="dorsales")
													)
									');
		
		foreach($result as $item){
			echo $item->post_content; 
		}

		$result = $wpdb->get_results('SELECT post_content									  
									FROM wp_posts
									WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="trapecios")
													)
									');

		foreach($result as $item){
			echo $item->post_content; 
		}

		$result = $wpdb->get_results('SELECT post_content									  
									FROM wp_posts
									WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="lumbares")
													)
									');
		
		foreach($result as $item){
			echo $item->post_content; 
		}

		break;

	case "Piernas Hombros":
		$result = $wpdb->get_results('SELECT *
										  FROM wp_post
										  WHERE ID IN (SELECT Object_id
										  				FROM wp_term_relationship IN(SELECT term_id
										  												FROM wp_terms
										  												WHERE slug="cuadriceps")
														)
										');
		$result = $wpdb->get_results('SELECT *
											  FROM wp_post
											  WHERE ID IN (SELECT Object_id
											  				FROM wp_term_relationship IN(SELECT term_id
											  												FROM wp_terms
											  												WHERE slug="gemelos")
															)
											');
		$result = $wpdb->get_results('SELECT *
									  FROM wp_post
									  WHERE ID IN (SELECT Object_id
									  				FROM wp_term_relationship IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="isquiotibiales")
													)
									');

		$result = $wpdb->get_results('SELECT *
									  FROM wp_post
									  WHERE ID IN (SELECT Object_id
									  				FROM wp_term_relationship IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="aductores")
													)
									');
		break;

	case "Pecho Bíceps":

		$result = $wpdb->get_results('SELECT *
									  FROM wp_post
									  WHERE ID IN (SELECT Object_id
									  				FROM wp_term_relationship IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="pecho")
													)
									');

		$result = $wpdb->get_results('SELECT *
									  FROM wp_post
									  WHERE ID IN (SELECT Object_id
									  				FROM wp_term_relationship IN(SELECT term_id
									  												FROM wp_terms
									  												WHERE slug="biceps")
													)
									');

		break;

	default: 
		break;
}
?>