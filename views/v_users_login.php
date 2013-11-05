
<!-- add php to the view only in case something has to be shown or not -->


<!-- <section> -->
<div class="container-fluid info">
	<div class="row-fluid">
		<div class="span3 offset2"><br/>Welcome to this caveman-themed messaging application!<br/>Here you'll be able to post your 'oongas' (a.k.a grunt), interact with other cavemen and leave the cave when you're ready to evolve.<br/><br/>You'll have fun nomad-er what!
		</div>          
		<div class="span3 loginarea" style="background-color:#004026; padding: 15px;"><!-- classes, center and well as well -->
			<!-- <h4><legend>Please Sign In</legend></h4> -->
			<h4>Please sign in</h4>

			<!-- 			<?php if(isset($message)) echo '<div class="message">'.$message.'</div>'; ?> -->



			<?php
			$login = new Form();

			$login->open('loginform', "/users/p_login", NULL, 'POST');
			?>
			<input type="text" class="clearfix" name="email" placeholder="Email" required/><br/>
			<input type="password" class="clearfix" name="password" placeholder="Password" required/><br/>
			<button class="btn" type="submit">Log in</button><br/></form>  

			<?php if(isset($error)): ?>
			<div class='error'>
				The specified combination email/password does not exist. Please try again.
			</div>
			<br>
		<?php endif; ?>

		<?php
		$signup = new Form();

		$signup->open('signupform', "/users/signup", NULL, 'POST');
		?>
		Not a caveman yet?
		<button class="btn" type="submit">Let's fix that</button>
	</form>


<!-- 			<form method="POST" action="/users/p_login">
				<input type="text" class="clearfix" name="email" placeholder="Email" /><br/>
				<input type="password" class="clearfix" name="password" placeholder="Password" /><br/><br/>
				<button class="btn" type="submit">Log in</button>     
			</form>
			<form action="/users/signup/">
				Not a caveman yet?
				<button class="btn" type="submit">Let's fix that</button>
			</form> -->
		</div>
	</div>
</div>
<!-- </section> -->

