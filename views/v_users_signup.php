
<div class="container-fluid login">

	<div class="row-fluid">

		<div class="span5 offset3" style="background-color:#004026; padding: 15px;"><!-- 601F08 -->
			<h2>Sign up<h2>
				<form method='POST' action='/users/p_signup' class="form-horizontal">
					<!-- p for process POST information -->
					<div class="control-group">
						<label class="control-label" for="inputFirstName">First name</label>
						<div class="controls">
							<input type="text" id="inputFirstName" placeholder="First name" name='first_name' value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>' required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputLastName">Last name</label>
						<div class="controls">
							<input type="text" id="inputLastName" name='last_name' placeholder="Last name" name='first_name' required>
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
			</div>
		</div>
	</div>	