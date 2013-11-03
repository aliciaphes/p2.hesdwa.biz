<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title) and defined('APP_NAME')) echo $title.' | '.APP_NAME; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

<?php if($user): ?>
	<!-- <div class="container"> -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class='container'>
				<!-- <a class="brand" href='/'><?php if(defined('APP_NAME')) echo APP_NAME;?></a> -->
				<a class="brand"><?php if(defined('APP_NAME')) echo APP_NAME;?></a>

				<!-- <a class="nav-collapse"></a> -->
				<ul class="nav nav-pills">
					<li><a title='Home' href='/'>Cave</a></li>	
					<li><a title='Add oonga' href='/posts/add'>Grunt</a></li>
					<li><a title='Display posts' href='/posts/'>View oongas</a></li>
					<li><a title='Follow/unfollow' href='/posts/users'>Interact</a></li>
					<li><a title='log out' href='/users/logout'>Go hunting</a></li>
				</ul>			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>		

				<!--<?php //else: ?> -->
			</div>
		</div>
	</div>
	<!-- </div>		 -->	
<?php endif; ?>





<header>
	<h2>
		<a href="http://www.flickr.com/photos/gareth_james_fi/9444253550/" title="Click for the original Flickr image" target="_blank"><img src="/img/caveman6.jpg" alt="Maybe this loading is as slow as a caveman"></a>
		Oonga Oonga
	</h2>
	<!-- <p class="tagline">Be part of the...club</p> -->
	<!-- <p><h3>Be part of the...club</h3></p> -->
	<h3>Be part of the...club</h3>
</header>



<?php if(isset($content)) echo $content; ?>

<?php if(isset($client_files_body)) echo $client_files_body; ?>

<footer>
     <!-- <p>&#169; Fall 2013 <a href="#">alipe</a></p> -->
     <p>&#169; Fall 2013 alipe</p>
</footer>
</body>
</html>