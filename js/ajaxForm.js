$(function(){
	$('#sameAddress').on('change', function() {
		if($('#sameAddress').is(':checked'))
		{
			$('#shipSubmit').val("Continue to Payment");
			$('#shipForm').attr('action', 'index.php?controller=Cart&action=payment');
		} else {
			$('#shipSubmit').val("Continue to Billing");
			$('#shipForm').attr('action', 'index.php?controller=Cart&action=billing');
		}
	});
	
	// $('#shipSubmit').on('click', function(){
	// 	$validation = validateForm();
	// 	if($validation == true)
	// 	{
	// 		$.ajax(
	// 		{
	// 			url: "models/saveContact.php",
	// 			method: "POST",
	// 			data:
	// 			{
	// 				strFullName: $("#name").val(),
	// 				strEmailAddress: $("#email").val(),
	// 				nPhone: $("#phone").val(),
	// 				nAltPhone: $("#altphone").val(),
	// 				strShippingAddress: $("#addressShip").val(),
	// 				strShippingZipCode: $("#zipcodeShip").val(),
	// 				strShippingCountry: $("#countryShip").val(),
	// 				strShippingState: $("#stateShip").val(),
	// 				strShippingCity: $("#cityShip").val(),
	// 				strBillingAddress: $("#addressBill").val(),
	// 				strBillingZipCode: $("#zipcodeBill").val(),
	// 				strBillingCountry: $("#countryBill").val(),
	// 				strBillingState: $("#stateBill").val(),
	// 				strBillingCity: $("#cityBill").val()
	// 			},
	// 			success: function(result)
	// 			{
	// 				a
	// 			},
	// 			error: function(result)
	// 			{
	// 				a
	// 			}
	// 		});
	// 	}
	// return false;
	// });
});