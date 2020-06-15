

	<div class="register-wrraper">
	<!--start of register-container-->
	<div class="register-container container">
			<ul>
				<li class="active">Login</li>
				<li>SignUp</li>
			</ul>
			<!--start of login-container-->
			<div class="form-container login-container">
				<h3>Login To Get Some Privilges</h3>
				<form  method="post" autocomplete="off">

					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-user"></i>
							<input type="text" name="log_user_name" placeholder="UserName" autocomplete="new-text" id="log_user_name">
						</div>
						<!--end of input-info-->
					</div>
					<!--end of input-container-->


					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-lock"></i>
							<input type="password" name="log_pass" placeholder="Password" autocomplete="new-password" id="log_pass">
						</div>
						<!--end of input-info-->
					</div>
					<!--end of input-container-->

					<p align="right"><a href="#">Forget Password?</a></p>
					<button name="log" onclick="loginAjax()">Login</button>
				</form>
				<p class="error mt-3"></p>
			</div>
			<!--end of form-container-->

			<!--start of login-container-->
			<div class="form-container signup-container">
				<h3>Create An Account</h3>
				<form action="" method="post" autocomplete="off">

					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-user"></i>
							<input type="text" name="sign_user_name" placeholder="Enter User Name" autocomplete="new-text" id="sign_user_name" onkeyup="uservalidation()">
						</div>
						<span class="error"></span>
					</div>
					<!--end of input-container-->

					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-envelope"></i>
							<input type="email" name="sign_email" placeholder="Email" id="sign_email">
						</div>
						<span class="error"></span>
					</div>
					<!--end of input-container-->

					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-lock"></i>
							<input type="password" name="sign_pass" placeholder="Enter Password" autocomplete="new-password" id="sign_pass">
						</div>
						<span class="error"></span>
					</div>
					<!--end of input-container-->

					<!--start of input-container-->
					<div class="input-container">
						<!--start of input-info-->
						<div class="input-info">
							<i class="fas fa-lock"></i>
							<input type="password" name="sign_con_pass" placeholder="Confirm Password" id="sign_con_pass">
						</div>
						<span class="error"></span>
					</div>
					<!--end of input-container-->

					<button type="submit" onclick="signupAjax()">Sign Up</button>
				</form>
				<div class="mt-3 alert" role="alert">
				</div>
			</div>
			<!--end of form-container-->

	
	</div>
	<!--end of register-container-->
	</div>


