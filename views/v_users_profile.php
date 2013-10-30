
<!-- add php to the view only in case something has to be shown or not -->


<?php if(isset($user)): ?>
	<h1>This is the profile for <?=$user->first_name?></h1>
<?php else: ?>
	<h1>No user has been specified</h1>
<?php endif; ?>
