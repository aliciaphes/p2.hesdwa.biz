<h2>Sign up<h2>

	<form method='POST' action='/users/p_signup' class="form-horizontal">
		<!-- p for process POST information -->
		<div class="control-group">
			<label class="control-label" for="inputFirstName">First name</label>
			<div class="controls">
				<input type="text" id="inputFirstName" placeholder="First name" name='first_name' value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>'>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputLastName">Last name</label>
			<div class="controls">
				<input type="text" id="inputLastName" name='last_name' placeholder="Last name" name='first_name'>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
				<input type="text" id="inputEmail" name='email' placeholder="Email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" id="inputPassword" name='password' placeholder="Password">
			</div>
		</div>


		<!-- sign up button: -->
		<div class="control-group">
			<div class="controls">
				<button type="submit"  value='Sign up' class="btn">Create account</button>
			</div>
		</div>

	</form>	