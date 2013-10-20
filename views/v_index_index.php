<h1>Welcome to <?=APP_NAME?>
	<?php
	echo 'user = '.$user;
	if($user){
		echo ', '.$user->first_name; 

// Show list of posts and followers

	}else{	// redirect to login page
		Router::redirect("/users/login/");
	};
	?>
</h1>