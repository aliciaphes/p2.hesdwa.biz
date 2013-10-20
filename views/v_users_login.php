<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<?php
//add php to the view only in case something has to be shown or not
	if(isset($user_name)): ?>
	<h1>This is the profile for <?=$user_name?></h1>
<?php endif; ?>

<header>
	<h1><a href="http://www.flickr.com/photos/gareth_james_fi/9444253550/" title="original Flickr image here">
		<img src="/img/caveman3.jpg" alt="Maybe this loading is as slow as a caveman">
	</a>Oonga Oonga</h1>
	<p class="tagline">Be part of the...club</p>
</header>



<div class="container-fluid hero-unit">
	<div class="row">
		<div class="span1"><br/><br/></div>
		<div class="span5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
		<div class="span1"><br/><br/></div>
		<div class="span5 loginarea">
			<!-- <button class="btn btn-primary" type="button">Default button</button> -->
			<!-- <input class="btn" type="submit" value="Submit"> -->
			<form class="form-horizontal" method='POST' action='/users/p_login'>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="text" name="email" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" name="password" placeholder="Password">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
<!-- 						<label class="checkbox">
						<input type="checkbox"> Remember me
					</label> -->
					<button type="submit" class="btn" value="Log in">Sign in</button>
				</div>
			</div>
		</form>
		<form class="form-horizontal" method='POST' action='/users/signup'>
			Not a user yet?
			<button class="btn btn-primary" type="submit">Let's fix that</button>
		</form> 
	</div>
</div>
</div>
<footer>
	<p>&#169; 2013 <a href="#">alipe</a></p>
</footer>

</body>
</html>