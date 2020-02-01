<!DOCTYPE html>
<html>
<head>
	<title>Login into your account</title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<br>
		<div class="signin-form">
		<form action="" method="POST">
		<legend><h1><u>Sign In</u></h1></legend>

	

			
			</div>
			<div class="form_group">
				<br>
				
				<input type="email" name="email" class="form_control" placeholder="example@site.com" required autocomplete="off">
			</div>
			
			<div class="form_group">
				<br>
				
				<input type="password" name="pass" class="form_control" placeholder="Enter password" required autocomplete="off">
			</div>
			<div class="forgot">
				<br>
				Forgot password:
				&nbsp

				<a href="forgot_pass.php">Click Here</a>
			</div>
			<br>
			<div class="form_group">
				<input type="submit" name="sign_in" class="form_control" placeholder="Login">
			</div>
			<?php ?>
		</form>
		
		<div class="no_acc">
			<br>
			Don't have an account:
			<a href="signup.php">create one!</a>
		</div>
		
</body>

</html>