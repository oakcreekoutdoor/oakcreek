$('#shipSubmit, #billSubmit').on('click', function()
{
	$validation = validateForm();
	if($validation == true) {
		if($('#sameAddress').is(':checked')){
			saveToShip();
			saveToBill();
			goToPayment();
		} else {
			return true;
		}
	}
	return false;
});

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