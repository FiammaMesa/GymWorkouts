<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/fiamma/miweb/wp-config.php' );
$category = $_POST['titulo'];
switch ($category) {
	case "Espalda Tríceps":
		global $wpdb;
		$result = $wpdb->get_results('SELECT *
									  FROM wp_posts
									  WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships
									  				WHERE term_taxonomy_id IN (SELECT term_id
									  											FROM wp_terms
									  											WHERE ((slug="triceps")or(slug="dorsales")or(slug="trapecios")or(slug="lumbares")))
													)
									');
		$final = $result;


		$num = 0;
		foreach($result as $item){
			$pos = strpos($item->post_content, "src=");
			$fin = strpos("alt=", $item);
			$num ++;
			if ($pos) {
				for ($i = $pos + 4; $i< $fin - 1; $i++){
					array_push($final, $item[i]);
				}
				echo "<a href=".$item->guid.">";
				echo "<div class='content-size image-".$num."'></div>";
				echo "</a>";
			
			}
			$final = "";
		}

		break;

	case "Piernas Hombros":
		$num=8;
		$result = $wpdb->get_results('SELECT *
									  FROM wp_posts
									  WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships
									  				WHERE term_taxonomy_id IN (SELECT term_id
									  											FROM wp_terms
									  											WHERE ((slug="cuadriceps")or(slug="isquiotibiales")or(slug="gemelos")or(slug="aductores")or(slug="abductores")or(slug="gluteos")or(slug="deltoides")))
													)
									');

		foreach($result as $item){
			$pos = strpos($item->post_content, "src=");
			$fin = strpos("alt=", $item);
			$num ++;
			if ($pos) {
				for ($i = $pos + 4; $i< $fin - 1; $i++){
					array_push($final, $item[i]);
				}
				echo "<a href=".$item->guid.">";
				echo "<div class='content-size image-".$num."'></div>";
				echo "</a>";
			
			}
			$final = "";
		}

		break;

	case "Pecho Bíceps":
		$num=17;
		$result = $wpdb->get_results('SELECT *
									  FROM wp_posts
									  WHERE ID IN (SELECT object_id
									  				FROM wp_term_relationships
									  				WHERE term_taxonomy_id IN (SELECT term_id
									  											FROM wp_terms
									  											WHERE ((slug="pecho")or(slug="biceps")))
													)
									');

		foreach($result as $item){
			$pos = strpos($item->post_content, "src=");
			$fin = strpos("alt=", $item);
			$num ++;
			if ($pos) {
				for ($i = $pos + 4; $i< $fin - 1; $i++){
					array_push($final, $item[i]);
				}
				echo "<a href=".$item->guid.">";
				echo "<div class='content-size image-".$num."'></div>";
				echo "</a>";
			
			}
			$final = "";
		}
		break;

	default: 
		break;
}
?>