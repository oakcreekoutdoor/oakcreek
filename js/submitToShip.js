function saveToShip(){
	$.ajax({
		url: "models/saveOrderShip.php",
		method: "POST",
		data:
		{
			strFullName: $("#name").val(),
			strEmailAddress: $("#email").val(),
			nPhone: $("#phone").val(),
			nAltPhone: $("#altphone").val(),
			strAddress: $("#address").val(),
			strZipCode: $("#zipcode").val(),
			strCountry: $("#country").val(),
			strState: $("#state").val(),
			strCity: $("#city").val()
		},
		success: function(result)
		{
			console.log("Yay! Processing order!");
		},
		error: function(result)
		{
			console.log("Something went wrong");
		}
	});
}