$(document).ready(function (){
	$(".button").click(function(){
		realizaProceso(); 
                return false; 
	});

});

function realizaProceso(){
        $.ajax({
                url:   '/fiamma/miweb/wp-content/themes/intuition/core/ajax-comments.php',
                type:  'post',
                beforeSend: function () {
                        $(".history-comments").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                	
                        $(".history-comments").html(response);
                }
        });
}