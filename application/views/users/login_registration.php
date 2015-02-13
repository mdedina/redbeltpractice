<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome!</h1>
	<form action="users/registration" method="post">
		<fieldset>
			<legend>Register</legend>
			<p>
				<label for="name">Name:</label>
				<input name="name" type="text">
			</p><p>
				<label for="alias">Alias:</label>
				<input name="alias" type="text">
			</p><p>
				<label for="email">Email:</label>
				<input name="email" type="text">
			</p><p>
				<label for="password">Password:</label>
				<input name="password" type="text">
			</p><p>
				*Password should be at least 8 characters
			</p><p>
				<label for="confirmpw">Confirm PW:</label>
				<input name="confirmpw" type="text">
			</p><p>
				<input type="submit" value="Register">
			</p>
		</fieldset>
	</form>

	<form action="users/login_post" method="post">
		<fieldset>
			<legend>Login</legend>
			</p><p>
				<label for="email">Email:</label>
				<input name="email" type="text">
			</p><p>
				<label for="password">Password:</label>
				<input name="password" type="text">
			</p><p>
			</p><p>
				<input type="submit" value="Login">
			</p>
		</fieldset>
	</form>

</body>
</html>