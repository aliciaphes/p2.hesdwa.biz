
<!-- This is the view where the user will access the application -->

<div class="container-fluid">

	<div class="row-fluid">

		<div class="span3 offset2 justified"><br/>Welcome to this caveman-themed messaging application!<br/>Here you'll be able to post your 'oongas' (a.k.a grunt), interact with other cavemen and leave the cave when you're ready to evolve.<br/><br/>You'll have fun nomad-er what!<br/><br/>
			+1 features:
			<ul>
				<li>Delete logged user's full history</li>	
				<li>Edit logged user's information</li>
			</ul>
		</div> 


         
		<div class="span3 oongabox">

			<h3>Please sign in</h3>

			<?php
			$login = new Form();

			$login->open('loginform', "/users/p_login", NULL, 'POST');
			?>
			<input type="text" class="clearfix" name="email" placeholder="Email" required/><br/>
			<input type="password" class="clearfix" name="password" placeholder="Password" required/><br/>
			<button id="loginButton" class="btn" type="submit">Log in</button><br/>
			</form>  

			<!-- Show error messages in case of incorrect login: -->
			
			<?php if(isset($error) && $error=='error'): ?>
				<div class='alert alert-error'>	
					<strong>The specified combination email/password does not exist. Please try again.</strong>
				<br/>
				</div>
				
			<?php endif;

			if(isset($error) && $error=='wrong_email'): ?>
				<div class='alert alert-error'>	
					<strong>Wrong format in email address. Please correct.</strong>
				<br/>
				</div>
			<?php endif; ?>


			<?php
			$signup = new Form();

			$signup->open('signupform', "/users/signup", NULL, 'POST');
			?>
			Not a caveman yet?<br/>
			<button class="btn" type="submit">Let's fix that</button>
			</form>
		</div>
	</div>
</div>


