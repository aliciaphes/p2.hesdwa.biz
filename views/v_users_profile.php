
<!-- add php to the view only in case something has to be shown or not -->

<!-- We do not need to check if the user is logged in because otherwise
we would have been redirected to the login page -->


<!-- <?php //if(isset($user->first_name;)): ?> -->




	<div class="container-fluid login">
		
		<div class="row-fluid">

			<div class="span4 offset3" style="background-color:#004026; padding: 15px;">
				<h3>Your profile</h3>

				First name: <?=$user->first_name?></br></br>
				Last name: <?=$user->last_name?></br></br>
				Email: <?=$user->email?></br></br>

				<!-- Use Time::offset para calcular la diferencia horaria si el usuario la cambia -->
				User creation date: <?=Time::display($user->created); ?></br></br>
				Last modified on: <?=Time::display($user->modified); ?></br></br>
				Last login on: <?=Time::display($user->last_login); ?></br></br>
				Time zone: <?=$user->timezone?></br></br>


				<form method="POST" action="/users/edit/">
					<button class="btn" type="submit">Edit your caveman profile</button>     
				</form>
			</div>
		</div>
	</div>



<!--
<?php //else: 
	//die('No user has been specified'); ?>
<?php //endif; ?>
-->