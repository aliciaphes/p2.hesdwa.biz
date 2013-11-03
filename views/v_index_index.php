
<!-- This page is going to act purely as a 'routing page', depending if the user exists or not -->
<?php
if($user)
	Router::redirect("/users/profile/");
else
	Router::redirect("/users/login/");
?>


