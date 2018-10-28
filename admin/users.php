<?php
include("partials/header.php");
include("partials/nav.php");
?>
	<div id="users">
		<h1>List of Users</h1>
		<div id="contactBox">

			<?php
				include_once("functions/db.php");
				include("partials/user_list.php");
			?>

		</div>
		<form>
			<h1>Add A User</h1>
			<label>Full Name:</label>
			<input type="text" class="requiredField" placeholder="Enter Full Name" name="strFullName" id="myName" value=""/>
			<label>Username:</label>
			<input type="text" class="requiredField" placeholder="Enter Username" name="strUserName" id="myUserName" value=""/>
			<label>Password:</label>
			<input type="password" class="requiredField" placeholder="(4 characters)" name="strPassword" id="myPassword" value=""/>
			<label>Email Address:</label>
			<input type="text" class="requiredField" placeholder="Enter Email Address" name="strEmailAddress" id="myEmail" value=""/>
			<label>Phone Number:</label>
			<input type="text" class="requiredField" placeholder="Enter Phone Number" name="nPhone" id="myPhone" value=""/>
			<a href="#" id="doAjax" onClick="validateForm()">ADD USER</a>
		</form>
</div>

<script>
	$(function(){

	$("#doAjax").click(function(){

		$("#contactBox").append("<img src='img/ajax-loader.gif'>");

		
		$.ajax(
		{
			url: "addUsers.php",
			method: "POST",
			data: {
				strFullName: $("#myName").val(),
				strUsername: $("#myUserName").val(),
				strPassword: $("#myPassword").val()
			},

			success: function(result){
        		$("#contactBox").html(result);
        		return false;
        	},
   		 	error: function(response)
   		 	{
   		 		console.log(response.statusText);
   		 	}
   		});

		return false;
		
	});


});
</script>

<?php
include("partials/footer.php");
?>