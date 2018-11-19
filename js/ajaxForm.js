//checkout process validation
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


//login form validation
$('#signIn').on('click', function()
{
    if($('.logError'.length>0)) {
        $('.logError').css('display', 'none');
    }

	$.ajax(
    {	
        url: "libs/checkLogin.php",
        method: "POST",	
        data: 
        {
            email: $("#email").val(),
            password: $("#password").val()
        },				
        success: function(result)
        {
            if(result) {
                window.location = "index.php?controller=Account&action=profile&userID="+result;
            } else {
                $('.sign-in').append('<p class="logError">Sorry e-mail or password not correct.</p>');
            }
        },
        error: function(a, b, error)
        {
             $('.sign-in').append('<p class="logError">Sorry e-mail or password not correct.</p>');
            console.log(error);
        }
    });
	return false;
});

$('#signUp').on('click', function()
{
	if($('.logError'.length>0)) {
        $('.logError').css('display', 'none');
    }

    $.ajax(
    {	
        url: "libs/checkLogin.php",
        method: "POST",	
        data: 
        {
            strEmailAddress: $("#newemail").val(),
            strFullName: $("#newname").val(),
            strPassword: $("#newpassword").val()
        },				
        success: function(result)
        {
            console.log('works');
        },
        error: function(a, b, error)
        {
            $('#loginForm').append('<p class="logError">Sorry something went wrong.</p>');
            console.log(error);
        }
    });
	return false;
});