<!-- This is the view where the user will see a list of users to follow -->
<!-- A table will be shown with the corresponding buttons -->

<?php

if(count($users) > 0){ ?>

<div class="container-fluid">

	<div class="row-fluid">

		<div class="span3 offset3 oongabox">

			<table>
				<?php
				foreach($users as $user): ?>

					<tr>
						<td><?= $user['first_name'] ?> <?= $user['last_name'] ?></td>
						
						<td><div class="span3 oongabox">&nbsp;</div></td>
						
						<td>
							<?php
							#If there exists a connection with this user, show an unfollow button
							if(isset($connections[$user['user_id']])): ?>

								<form class="follow" action="/posts/unfollow/<?=$user['user_id']?>">
									<button class="btn" type="submit">Unfollow</button>
								</form>

								<!-- Otherwise, show the follow button -->
							<?php else: ?>

								<form class="follow" action="/posts/follow/<?=$user['user_id']?>">		
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

<?php }else{ ?>

	<div class="container-fluid">

		<div class="row-fluid">

			<div class="span3 offset3 oongabox">
				<p>No users to follow!</p>
				<p>Man this cave is empty...check back later!</p> 
			</div>

		</div>
		
	</div>
<?php } ?>
