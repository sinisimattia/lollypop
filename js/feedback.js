$(function(){
	var border = $("#feedback-wrapper").css("border");
	var background = $("#feedback-wrapper").css("background-color");

	$("#close-feedback").click(function(){
		$("#feedback").css({"display": "none"});
		$("#CU").css({"display": "none"});
		$("#divider").css({"display": "none"});
		$("#close-feedback").css({"display": "none"});
		$("#feedback-wrapper").css({
			"border": "none",
			"background-color": "transparent"
		});
		$("#open-feedback").css({"display": "block"});
	});

	$("#open-feedback").click(function(){
		$("#feedback").css({"display": "block"});
		$("#CU").css({"display": "block"});
		$("#divider").css({"display": "block"});
		$("#open-feedback").css({"display": "none"});
		$("#close-feedback").css({"display": "block"});
		$("#feedback-wrapper").css({
			"border": border,
			"background-color": background
		});
	});

	$("#feedback").submit(function(){
		var request = "name=" + $("#first-name").val() + "&from=" + $("#email").val() + "&message=" + $("#help").val();

		$.post( url, request, function(result){
			if ( result == "sent" )
				swal({
					title: "Thank You!",
					icon: "success",
					text: "Your feedback is very important to us."
				});
			else
				swal({
					title: "Ops...",
					icon: "error",
					text: "There was an error, please try sending your message again."
				});

			console.log(result);
		});

		return false;
	});
});