$(document).ready(function (){
	$(".button").click(function(){
		realizaProceso($(this).find("h3").html()); 
                return false; 
	});

});

function realizaProceso(tipoejercicios){
        var parametros = {
                "titulo" : tipoejercicios
        };
        $.ajax({
                data:  parametros,
                url:   '/fiamma/miweb/wp-content/themes/intuition/core/ajax-comments.php',
                type:  'post',
                beforeSend: function () {
                        $(".result").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                	
                        $(".result").html(response);
                }
        });
}