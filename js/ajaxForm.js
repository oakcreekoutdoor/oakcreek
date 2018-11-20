//checkout user validation
$('#checkOpt input[type=radio]').on('change', function() {
    if($(this).val() == "user") {
        $('#modalLogin').css('display', 'block');
        return false;
    } else if($(this).val() == "guest") {
        $('#shipForm')[0].reset();
        return false;
    }
});

$('#cancelBtn').on('click', function()
{
    $('#modalLogin').css('display', 'none');
    $('#shipForm')[0].reset();
	return false;
});

$('#logInCheckout').on('click', function()
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
            email: $("#emailUser").val(),
            password: $("#passwordUser").val()
        },				
        success: function(result)
        {
            if(result) {
                $('#modalLogin').css('display', 'none');
                $('#uID').val(result);
                location.reload();
            } else {
                $('#login').append('<p class="logError">E-mail or password are not correct.</p>');
            }
        },
        error: function(a, b, error)
        {
             $('.sign-in').append('<p class="logError">Sorry something went wrong.</p>');
            console.log(error);
        }
    });
	return false;
});




//checkout process validation
$('#shipSubmit').on('click', function()
{
	$validation = validateForm();
	if($validation == true) {
        $.ajax(
        {	
            url: "models/saveShip.php",
            method: "POST",	
            data: 
            {
                strEmailAddress: $("#email").val(),
                strFullName: $("#fullName").val(),
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
                window.location = "index.php?controller=Cart&action=billing";
            },
            error: function(a, b, error)
            {
                 $('.sign-in').append('<p class="logError">Sorry something went wrong.</p>');
                console.log(error);
            }
        });
	}
	return false;
});

$('#billSubmit').on('click', function()
{
	$validation = validateForm();
	if($validation == true) {
        $.ajax(
        {	
            url: "models/saveBill.php",
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
                window.location = "index.php?controller=Cart&action=payment";
            },
            error: function(a, b, error)
            {
                 $('.sign-in').append('<p class="logError">Sorry something went wrong.</p>');
                console.log(error);
            }
        });
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
    
    if($('.logSuccess'.length>0)) {
        $('.logSuccess').css('display', 'none');
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
                $('.sign-in').append('<p class="logError">E-mail or password are not correct.</p>');
            }
        },
        error: function(a, b, error)
        {
             $('.sign-in').append('<p class="logError">Sorry something went wrong.</p>');
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
    
    if($('.logSuccess'.length>0)) {
        $('.logSuccess').css('display', 'none');
    }
    $.ajax(
    {	
        url: "models/saveUser.php",
        method: "POST",	
        data: 
        {
            newemail: $("#newemail").val(),
            newname: $("#newname").val(),
            newpassword: $("#newpassword").val()
        },				
        success: function(result)
        {
            if(result) {
                $('#loginForm').append('<p class="logSuccess">Thank you! Please make your login.</p>');
                
                window.location = "index.php?controller=Account&action=login";
                
            } else {
                $('#loginForm').append('<p class="logError">Something went wrong!</p>')
            }
        },
        error: function(a, b, error)
        {
            $('#loginForm').append('<p class="logError">Sorry something went wrong.</p>');
            console.log(error);
        }
    });
	return false;
});