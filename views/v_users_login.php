
<!-- add php to the view only in case something has to be shown or not -->


<!-- <header>
	<h1>
		<a href="http://www.flickr.com/photos/gareth_james_fi/9444253550/" title="Click for the original Flickr image" target="_blank"><img src="/img/caveman3.jpg" alt="Maybe this loading is as slow as a caveman"></a>
		Oonga Oonga
	</h1> -->
	<!-- <p class="tagline">Be part of the...club</p>
	<p><h3>Be part of the...club</h3></p>
</header> -->



<!-- <section> -->
<div class="container-fluid login">
	<div class="row-fluid">
		<div class="span3 offset2"><br/>Welcome to this caveman-themed messaging application!<br/>Here you'll be able to post your 'oongas' (a.k.a grunt), interact with other cavemen and leave the cave when you're ready to evolve.<br/><br/>You'll have fun nomad-er what!
		</div>          
		<div class="span3 loginarea" style="background-color:#004026; padding: 15px;"><!-- classes, center and well as well -->
			<!-- <h4><legend>Please Sign In</legend></h4> -->
			<h4>Please sign in</h4>
			<form method="POST" action="/users/p_login">
				<input type="text" class="clearfix" name="email" placeholder="Email" /><br/>
				<input type="password" class="clearfix" name="password" placeholder="Password" /><br/><br/>
				<button class="btn" type="submit">Log in</button>     
			</form>
			<form action="/users/signup/">
				Not a caveman yet?
				<button class="btn" type="submit">Let's fix that</button>
			</form>
		</div>
	</div>
</div>
<!-- </section> -->

