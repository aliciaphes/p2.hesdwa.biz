<h1>Welcome to <?=APP_NAME?>
	<?php
	if($user){
		echo 'user = '.$user->first_name; 

		echo 'Show list of posts and followers';

		Router::redirect("/users/profile/");

	}else{	// redirect to login page
		echo 'no user';
		//please sign up or login
		Router::redirect("/users/login/");
	};
	?>
</h1>


