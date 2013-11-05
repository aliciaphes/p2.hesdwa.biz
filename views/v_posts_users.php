<?php

if(1 == 2){ ?>
<?php echo 'hola'; ?>
<div class="container-fluid login">

	<?php
	foreach($users as $user): ?>
	
	<div class="row-fluid">
		<div class="span2 offset2" style="background-color:#004026; padding: 15px;">
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
		<form action="/posts/follow/<?=$user['user_id']?>">		
			<button class="btn" type="submit">Follow</button>
		</form>
	<?php endif; ?>
</div>
</div>
<?php endforeach; ?>
</div>
<?php }; ?>


<!-- //////////////////////////////////////////////////////////////// -->




<?php

if(count($users) > 0){ ?>
<div class="container-fluid login">
	<div class="row-fluid">
		<div class="span3 offset3" style="background-color:#004026; padding: 15px;">
			<table>
				<?php
				foreach($users as $user): ?>

				<tr>
					<td><?= $user['first_name'] ?> <?= $user['last_name'] ?></td>
					<td><div class="span3" style="background-color:#004026; padding: 15px;">&nbsp;</div></td>
					<td><!-- margin: 0; text-align: center; -->

						<?php
			#If there exists a connection with this user, show an unfollow button
						if(isset($connections[$user['user_id']])): ?>


						<!-- <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a> -->
						<form style="margin: 0; text-align: center;" action="/posts/unfollow/<?=$user['user_id']?>">
							<button class="btn" type="submit">Unfollow</button>
						</form>

						<!-- Otherwise, show the follow button -->
					<?php else: ?>
					<form style="margin: 0; text-align: center;" action="/posts/follow/<?=$user['user_id']?>">		
						<button class="btn" type="submit">Follow</button>
					</form>

				<?php endif; ?>

			</td>
		</tr>

	<?php endforeach; ?>

</table>
</div>
</div>
</div>
<?php }else{ 
	echo 'no users to follow!'; }
	?>