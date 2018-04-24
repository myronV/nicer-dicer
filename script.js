$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо! Ваш заказ принят на обработку!");
            window.location.replace("http://localhost:63342/nicer-dicer/index.html?_ijt=mefe4lfv77agbthh0cnead5hv6");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});