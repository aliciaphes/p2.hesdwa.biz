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



<!-- <h2>Log in</h2>
<form method='POST' action='/users/p_login'>

	Email: <input type='text' name='email'><br>
	Password: <input type='password' name='password'><br>

	<input type='Submit' value='Log in'>        
</form> -->



<!-- <section> -->
<div class="container-fluid login">
	<div class="row-fluid">
		<div class="span3 offset2"><br/>Welcome to this caveman-themed messaging application!<br/>Here you'll be able to post your 'oongas', follow other cavemen and un-follow them when you're ready to evolve.<br/><br/>You'll have fun nomad-er what!
		</div>          
		<div class="span3 loginarea"><!-- classes, center and well as well -->
			<!-- <h4><legend>Please Sign In</legend></h4> -->
			<h4>Please sign in</h4>
			<form method="POST" action="/users/p_login">
				<input type="text" class="clearfix" name="email" placeholder="Email" /><br/>
				<input type="password" class="clearfix" name="password" placeholder="Password" /><br/><br/>
				<button class="btn" type="submit">Log in</button>     
			</form>
			<form action="/users/signup">
				Not a user yet?
				<!-- <button class="btn btn-primary" type="submit" name="submit">Let's fix that</button> -->
				<button class="btn" type="submit">Let's fix that</button>
			</form>
		</div>
	</div>
</div>
<!-- </section> -->

