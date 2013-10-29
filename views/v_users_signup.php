<h2>Sign Up<h2>

	<form method='POST' action='/users/p_signup'>
		<!-- p for process POST information -->

		First Name<br>
		<input type='text' name='first_name' value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>'><br>

		<br>
		Last Name<br>
		<input type='text' name='last_name'>
		<br>
		Email<br>
		<input type='text' name='email'>
		<br>
		Password<br>
		<input type='password' name='password'>
		<br>

		<input type='submit' value='Sign up'>

	</form>