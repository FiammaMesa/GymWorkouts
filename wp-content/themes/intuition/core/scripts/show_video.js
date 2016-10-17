jQuery(document).ready(function(){
	$(".slice-button").click(function(){
		if ($(".just-for-view").hasClass("slice-video")){
			$(".just-for-view").removeClass("slice-video");
			$(".slice-button").html("Ocultar");
		} 
		else {
			$(".just-for-view").addClass("slice-video");
			$(".slice-button").html("Ver más");
		}
	});
});