
<!-- add php to the view only in case something has to be shown or not -->


<?php if(isset($user)): ?>

	<div class="container-fluid login">
		
		<div class="row-fluid">

			<div class="span3 offset2" style="background-color:#601F08; padding: 15px;">
				<h3>Your profile</h3>

				<h6>First name: <?=$user->first_name?></h6>
				<h6>Last name: <?=$user->last_name?></h6>
				<h6>Email: <?=$user->email?></h6>

				<!-- Use Time::offset para calcular la diferencia horaria si el usuario la cambia -->
				<h6>User creation date: <?=Time::display($user->created); ?></h6>
				<h6>Last modified on: <?=Time::display($user->modified); ?></h6>
				<h6>Last login on: <?=Time::display($user->last_login); ?></h6>
				<h6>Time zone: <?=$user->timezone?></h6>



				<form method="POST" action="/users/edit/">
					<button class="btn" type="submit">Edit your caveman profile</button>     
				</form>
			</div>
		</div>
	</div>




<?php else: ?>
	<h1>No user has been specified</h1>
<?php endif; ?>
