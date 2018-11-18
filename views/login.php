<section id="login" class="container cf">
<form>
		<div class="cont">
		  <div class="form sign-in">
			      <h2>Welcome back!</h2>
				  <label>
				        <span>E-mail Address</span>
				        <input type="email" />
				  </label>
			      <label>
				        <span>Password:</span>
				        <input type="password" />
			      </label>
			            <a href="#" class="btn prime">LOG IN</a>
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
						        <span>Name:</span>
						        <input type="text" name="fname" required>
					      </label>
					      <label>
						        <span>E-mail Address:</span>
						        <input type="text" name="email" required>
					      </label>
					      <label>
						        <span>Password:</span>
						        <input type="text" name="password" required>
					      </label>
					      <div>
					            <a href="#" class="btn prime">SIGN UP</a>
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