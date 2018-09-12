<?php
include_once("includes/classes/Account.php");
 $account = new Account();
 $account->register();
 include_once("includes/handlers/register-handler.php");
 include_once("includes/handlers/register-handler.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Spotify!</title>
</head>
<body>
	<div id = "inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type ="text" placeholder="Username" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type ="Password" placeholder="Password" required>
			</p>
				<button type="submit" name="loginButton">LOG IN</button>
		</form>

		<br><br>



		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>

			<p>
				<label for="Username">Username</label>
				<input id="Username" name="Username" type ="text" placeholder="Username" required>
			</p>

			<p>
				<label for="firstName">First Name</label>
				<input id="firstName" name="firstName" type ="text" placeholder="Your FirstName" required>
			</p>
			<p>
				<label for="lastName">Last Name</label>
				<input id="lastName" name="lastName" type ="text" placeholder="Your LastName" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type ="email" placeholder="Your Email" required>
			</p>
			<p>
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type ="email2" placeholder="Your Email" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type ="password" placeholder="Your Password" required>
			</p>
			<p>
				<label for="password2">Confirm Password</label>
				<input id="password2" name="password2" type ="password" placeholder="Your Password" required>
			</p>
			<button type="submit" name="registerButton">Sign Up</button>	
		</form>


	</div>
</body>
</html>