<?php

if(count($users) > 0){ ?>

<div class="container-fluid login">

	<?php
	foreach($users as $user): ?>
	
	<div class="row-fluid">



		<div class="span2 offset2">
			<!-- username -->
			<?=$user['first_name']?> <?=$user['last_name']?>

		</div>


		<div class="span3">
			<!-- buttons -->
			<?php
			#If there exists a connection with this user, show an unfollow button
			if(isset($connections[$user['user_id']])): ?>


			<!-- <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a> -->
			<form action="/posts/unfollow/<?=$user['user_id']?>">
				<button class="btn" type="submit">Unfollow</button>
			</form>



			<!-- Otherwise, show the follow button -->
		<?php else: ?>
		<!-- <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a> -->
		<form action="/posts/follow/<?=$user['user_id']?>">		
			<button class="btn" type="submit">Follow</button>
		</form>

	<?php endif; ?>

</div>
</div>
<?php endforeach; ?>


</div>

<?php
}else{
	echo 'no users to follow!';
}

?>

<!-- <button type="button" class="btn" data-toggle="button">Follow</button> -->