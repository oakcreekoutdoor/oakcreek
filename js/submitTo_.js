function (){
	$.ajax({
		url: "models/saveContact.php",
		method: "POST",
		data:
		{
			strFullName: $("#name").val(),
			strEmailAddress: $("#email").val(),
			nPhone: $("#phone").val(),
			nAltPhone: $("#altphone").val(),
			strShippingAddress: $("#address").val(),
			strShippingZipCode: $("#zipcode").val(),
			strShippingCountry: $("#country").val(),
			strShippingState: $("#state").val(),
			strShippingCity: $("#city").val(),
			strBillingAddress: $("#address").val(),
			strBillingZipCode: $("#zipcode").val(),
			strBillingCountry: $("#country").val(),
			strBillingState: $("#state").val(),
			strBillingCity: $("#city").val()
		},
		success: function(result)
		{
			a
		},
		error: function(result)
		{
			a
		}
	});
}