<?php
include("check_user.php");
include("partials/header.php");
include("partials/nav.php");
?>
	<div id="users">
		<h1>Administrators</h1>
		<div id="contactBox">

			<?php
				include_once("functions/db.php");
				include("partials/user_list.php");
			?>

		</div>
		<form>
			<h1>Add An Admin</h1>
			<label class="requiredLabel">Full Name:</label>
			<input type="text" class="requiredField" placeholder="Enter Full Name" name="strFullName" id="myName"/>
			<label class="requiredLabel">Username:</label>
			<input type="text" class="requiredField" placeholder="Enter Username" name="strUserName" id="myUserName"/>
			<label class="requiredLabel">Password:</label>
			<input type="password" class="requiredField" placeholder="(4 characters)" name="strPassword" id="myPassword" />
			<label>Email Address:</label>
			<input type="text" class="requiredField" placeholder="Enter Email Address" name="strEmailAddress" id="myEmail" />
			<label>Phone Number:</label>
			<input type="text" class="requiredField" placeholder="Enter Phone Number" name="nPhone" id="myPhone" />
			<input type="submit" onclick="validateForm()" id="doAjax" value="Add Admin"/>
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
				strUserName: $("#myUserName").val(),
				strPassword: $("#myPassword").val(),
				strEmailAddress: $("#myEmail").val(),
				nPhone: $("#myPhone").val()
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