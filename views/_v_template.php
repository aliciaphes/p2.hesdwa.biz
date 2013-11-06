<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title) and defined('APP_NAME')) echo $title.' | '.APP_NAME; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	<a id="top"></a>

	<?php if($user): ?>

<!-- We create a navigation bar for the user -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class='container'>

					<a class="brand"><?php if(defined('APP_NAME')) echo APP_NAME.'-'.$user->first_name.' '.$user->last_name;?></a>

					<ul class="nav nav-pills">
						<li><a title='Home' href='/'>Cave</a></li>	
						<li><a title='Add oonga' href='/posts/add'>Grunt</a></li>
						<li><a title='Display posts' href='/posts/'>View oongas</a></li>
						<li><a title='Follow/unfollow' href='/posts/users'>Interact</a></li>
						<li><a title='log out' href='/users/logout'>Go hunting</a></li>
					</ul>			
				</div>
			</div>
		</div>

	<?php endif; ?>



<!-- Set a header with a little picture: -->
<header>
	<h2>
		<a href="http://www.flickr.com/photos/jflinchbaugh/5534624047/" title="Click for the original Flickr image" target="_blank"><img src="/img/caveman.jpg" alt="Maybe this loading is as slow as a caveman"></a>
		Oonga Oonga&nbsp;&nbsp;//&nbsp;&nbsp;Be part of the...club
	</h2>
</header>



<?php if(isset($content)) echo $content; ?>

<?php if(isset($client_files_body)) echo $client_files_body; ?>

<!-- Set a footer: -->
<footer>
	<p>&#169; Fall 2013 ALicia Perez</p>
</footer>
<p class="gototop"><a class="top" href="#top">Back to top</a></p>
</body>
</html>