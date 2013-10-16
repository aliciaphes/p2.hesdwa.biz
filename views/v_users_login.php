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
</body>
</html>