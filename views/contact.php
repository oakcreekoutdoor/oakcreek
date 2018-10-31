<section id="contact" class="container cf">
	<div class="contactText">
		<h2><?=$arrData["content"][0]['strHeading1']?></h2>
		<p><?=$arrData["content"][0]['strBodyText']?></p>
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