/*jQuery(document).ready(function(){
	$(".slice-button").click(function(){
		if ($(".just-for-view").hasClass("slice-video")){
			$(".just-for-view").removeClass("slice-video");
			$(".slice-button").html("Ocultar");
		} else {
			$(".just-for-view").addClass("slice-video");
			$(".slice-button").html("Ver más");
		}
	});
});*/

jQuery(document).ready(function(){

	/* Function for turn on or off the icons */
	$(".icon1").hover(function(){
		$(".icon1").removeClass("icon-opacity");
	},
	function(){
		$(".icon1").addClass("icon-opacity");
		
	});

	$(".icon2").hover(function(){
		$(".icon2").removeClass("icon-opacity");
	},
	function(){
		$(".icon2").addClass("icon-opacity");
		
	});

	$(".icon3").hover(function(){
		$(".icon3").removeClass("icon-opacity");
	},
	function(){
		$(".icon3").addClass("icon-opacity");
		
	});

	/* On click it adds or remove the slice-video class, which has a display: none attribute */
	$(".icon1").click(function(){
		if($(".icon1").hasClass("plus-icon")){
			$(".just-for-view1").slideDown("slice-video");
			$(".icon1").removeClass("plus-icon");
			$(".icon1").addClass("minus-icon");
		} else {
			$(".just-for-view1").slideUp("slice-video");
			$(".icon1").removeClass("minus-icon");
			$(".icon1").addClass("plus-icon");
		}
	});

	$(".icon2").click(function(){
		if($(".icon2").hasClass("plus-icon")){
			$(".just-for-view2").slideDown("slice-video");
			$(".icon2").removeClass("plus-icon");
			$(".icon2").addClass("minus-icon");
		} else {
			$(".just-for-view2").slideUp("slice-video");
			$(".icon2").removeClass("minus-icon");
			$(".icon2").addClass("plus-icon");
		}
	});

	$(".icon3").click(function(){
		if($(".icon3").hasClass("plus-icon")){
			$(".just-for-view3").slideDown("slice-video");
			$(".icon3").removeClass("plus-icon");
			$(".icon3").addClass("minus-icon");
		} else {
			$(".just-for-view3").slideUp('slow');
			$(".icon3").removeClass("minus-icon");
			$(".icon3").addClass("plus-icon");
		}
	});

});



