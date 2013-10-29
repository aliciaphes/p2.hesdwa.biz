	<?php
//add php to the view only in case something has to be shown or not
	if(isset($user_name)): ?>
	<h1>This is the profile for <?=$user_name?></h1>
<?php endif; ?>

<header>
	<h1>
		<a href="http://www.flickr.com/photos/gareth_james_fi/9444253550/" title="Click for the original Flickr image" target="_blank"><img src="/img/caveman3.jpg" alt="Maybe this loading is as slow as a caveman"></a>
		Oonga Oonga
	</h1>
	<!-- <p class="tagline">Be part of the...club</p> -->
	<p><h3>Be part of the...club</h3></p>
</header>



<h2>Log in</h2>

<form method='POST' action='/users/p_login'>

	Email: <input type='text' name='email'><br>
	Password: <input type='password' name='password'><br>
	
	<input type='Submit' value='Log in'>        

</form>


