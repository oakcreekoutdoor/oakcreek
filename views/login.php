<section id="login" class="container cf">
<form id="loginForm" method="post" action="">
		<div class="cont">
		  <div class="form sign-in">
			      <h2>Welcome back!</h2>
				  <label>
				        <span>E-mail Address:</span><span class="req">*</span>
				        <input id="email" name="email" type="email" class="requiredField" />
				  </label>
			      <label>
				        <span>Password:</span><span class="req">*</span>
				        <input id="password" name="password" type="password" class="requiredField" />
			      </label>
			            <input type="submit" id="signIn" class="btn prime" value="LOG IN" />
			       <div class="fakeImg">
			            <img src="assets/login.jpeg" alt="login images">
		           </div>    
          </div>
          <div class="sub-cont">
				    <div class="img">
					      <div class="img__text m--up">
					          <h2>New here?</h2>
					      </div>
					      <div class="img__text m--in">
					          <h2>Already a Member?</h2>
					      </div>
					      <div class="btn sec">
					           <span class="m--up">SIGN UP NOW</span>
					           <span class="m--in">Sign In</span>
					      </div>
				    </div>
				    <div class="form sign-up">
					      <h2>Be One of Us</h2>
					      <label>
						        <span>Full Name:</span><span class="req">*</span>
						        <input id="newname" type="text" name="newname" class="requiredField" />
					      </label>
					      <label>
						        <span>E-mail Address:</span><span class="req">*</span>
						        <input id="newemail" type="email" name="newemail" class="requiredField" />
					      </label>
					      <label>
						        <span>Password:</span><span class="req">*</span>
						        <input id="newpassword" type="password" name="newpassword" class="requiredField" />
					      </label>
					      <div>
                              <input type="submit" id="signUp" class="btn prime" value="SIGN UP" />
							    <div class="fakeImg">
							            <img src="assets/signup.jpeg" alt="signup images">
							    </div>
					      </div>
					      <script>
					        document.querySelector('.cont .btn.sec').addEventListener('click', function() {
					        document.querySelector('.cont').classList.toggle('s--signup');
					       });

					      </script>
				    </div>
          </div>
    </div>
</form>
</section>