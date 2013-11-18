$(document).ready(function(){

	function validateField(id){
		if($('#' + id).val().length == 0){
			showMessage("The " + id + " field id empty", "error");
			return false;
		}

		return true;
	}

	function showMessage(message, type, redirect){
		$('<div class="commonMessage ui-loader ui-overlay-shadow ui_body_' + type + ' ui-corner-all"><h1>' + message + '</h1></div>').css({ "display": "block", "opacity": 0.96, top: $(window).scrollTop() + 100 })
        .appendTo( $.mobile.pageContainer )
        .delay( 2000 )
        .fadeOut( 400, function(){
         	$(this).remove();
         	if(redirect){
			    	//window.location.href = "index.html";
			    	$.mobile.changePage('survey.php', {'transition': 'slide'});
			    }
    		});
	}

	$('form').submit(function(){
		if(validateField("username") && validateField("password")){
			$.post("libs/auth.php", $('form').serialize(), function(response){
				if(response == 'true'){
					showMessage("You have logged in successfully. You will now be redirected to the home page", "success", true);
				}else{
					showMessage("Error logging in : " + response, "error");
				}
			})
		}

		return false;
	});

});