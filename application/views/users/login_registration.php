<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
	form{
		display: inline-block;
		vertical-align: top;
	}
	.error{
		color: red;
	}
	</style>
</head>
<body>
	<h1>Welcome!</h1>
	<form action="users/registration_post" method="post">
		<fieldset>
			<legend>Register</legend>
			<?php if ($this->session->flashdata('email_in_use')) 
			{ ?>
				<p class='error'>Email address already in use.</p>
			<?php } ?>
			<?php if ($this->session->flashdata('registration_success')) 
			{ ?>
				<p class='error'>Registration successful. Please log in.</p>
			<?php } ?>
			<?php if ($this->session->flashdata('validation_errors'))
			{
				echo "<div class='error'>";
				echo $this->session->flashdata('validation_errors');
				echo "</div>";
			}
			?>
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
				<label for="passconf">Confirm PW:</label>
				<input name="passconf" type="text">
			</p><p>
				<input type="submit" value="Register">
			</p>
		</fieldset>
	</form>

	<form action="users/login_post" method="post">
		<fieldset>
			<legend>Login</legend>
			<?php if ($this->session->flashdata('login_error')) 
			{ ?>
				<p class='error'>Login failed.</p>
			<?php } ?>
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