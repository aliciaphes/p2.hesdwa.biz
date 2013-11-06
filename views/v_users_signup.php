
<!-- This is the view where the user can sign up -->

<div class="container-fluid">

	<div class="row-fluid">

		<div class="span5 offset3 oongabox">

			<h3>Sign up</h3>

			<!-- Show fields to be later verified -->

			<form method='POST' action='/users/p_signup' class="form-horizontal">
				
				<div class="control-group">
					<label class="control-label" for="inputFirstName">First name</label>
					<div class="controls">
						<input type="text" id="inputFirstName" placeholder="First name" name='first_name' required>
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
						<input type="text" id="inputEmail" name='email' placeholder="Email" required>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" name='password' placeholder="Password" required>
					</div>
				</div>


				<!-- sign up button: -->
				<div class="control-group">
					<div class="controls">
						<button type="submit"  value='Sign up' class="btn">Create account</button>
					</div>
				</div>
			</form>

			<!-- Error handling -->
			<?php if(isset($error) && $error=='error'): ?>
			
				<div class='alert alert-error'>	
					<strong>The specified email already exists. Please log in or try again.</strong>
				</div>
				<br>

				<?php
				$login = new Form();
				$login->open('loginform', "/users/login", NULL, 'POST');
				?>
				<button class="btn" type="submit">Log in</button><br/>
				</form>
			<?php endif; ?>

			<?php if(isset($error)&& $error=='wrong_email'): ?>
				<div class='alert alert-error'>	
					<strong>Wrong format in email address. Please correct.</strong>
				</div>
				<br>
			<?php endif; ?>

		</div>
	</div>
</div>	