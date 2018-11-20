//get product quantity
$('#qtyProd').on('click', function() {
    $.ajax({
        url: "models/saveQtd.js",
        method: "POST",
        data: {
            quantity: $_POST['quantity'],
        },
        success: function(result)
        {
            console.log($_SESSION);
        },
        error: function(a, b, error)
        {
            $('#loginForm').append('<p class="logError">Sorry something went wrong.</p>');
            console.log(error);
        }
    });
});