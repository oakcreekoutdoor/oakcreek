function saveToBill(){
	$.ajax({
		url: "models/saveOrderBill.php",
		method: "POST",
		data:
		{
			strAddress: $("#address").val(),
			strZipCode: $("#zipcode").val(),
			strCountry: $("#country").val(),
			strState: $("#state").val(),
			strCity: $("#city").val()
		},
		success: function(result)
		{
			console.log("Yay! Almost there!");
		},
		error: function(result)
		{
			console.log("Something went wrong");
		}
	});
}