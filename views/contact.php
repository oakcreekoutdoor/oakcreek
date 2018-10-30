<section id="contact" class="container cf">
	<div class="contactText">
		<h2>Contact Us</h2>
		<p>Questions, comments, or concerns? We'd love to hear from you. Whether its feedback, positive or negative, we welcome it all. We want you to have the best Oak Creek Outdoor experience possible, so don't hesitate to reach out to us.</p>
	</div>
			<div id="contactBox">
				<form method="post" action="models/saveContact.php" onsubmit="return validateForm()">
					<label class="requiredLabel">Full Name: </label>
					<input type="text" name="strFullName" placeholder="Enter your full name" class="requiredField" value=""/><br/>

					<label class="requiredLabel">Email Address: </label>
					<input type="text" name="strEmailAddress" placeholder="Enter your email address" class="requiredField"/><br/>

					<label class="requiredLabel">Comment: </label>
					<textarea name="strComment" value=""/></textarea>
					<input type="submit" name="Submit" class="btn prime" value="Submit" />
				</form>
	     </div><!--contactBox-->
	
			
</section>