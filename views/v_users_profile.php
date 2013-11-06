
<!-- This is the view where the user can view his information -->


<!-- We do not need to check if the user is logged in because otherwise
	we would have been redirected to the login page -->

<div class="container-fluid">
		
	<div class="row-fluid">

		<div class="span4 offset1 oongabox">
			<h3>Your profile</h3>

			First name: <?= $user->first_name ?><br/><br/>
			Last name:  <?= $user->last_name ?><br/><br/>
			Email:      <?= $user->email ?><br/><br/>

			User creation date: <?=Time::display($user->created); ?><br/><br/>
			Last modified on:   <?=Time::display($user->modified); ?><br/><br/>
			Last login on:      <?=Time::display($user->last_login); ?><br/><br/>
			Time zone:          <?=$user->timezone?><br/><br/>

			<form method="POST" action="/users/edit/">
				<button class="btn" type="submit">Edit your caveman profile</button>     
			</form>
		</div>

		<?php
		if(count($myposts) > 0){ ?>

			<div class="span5">

				<div class="container-fluid">
					
					<h3>Your oongas</h3>
					<?php foreach($myposts as $mypost): ?>

						<div class="row-fluid">

							<div class="span12 post oongabox">

								<article>
									<h4 class='underline'>
										<?=$user->first_name?> <?=$user->first_name?> posted:
									</h4>

									<i><time datetime="<?=Time::display($mypost['created'],'Y-m-d H:i')?>">
										on <?= Time::display($mypost['created']) ?>:
									</time></i>
									<p><?=$mypost['content']?></p>
								</article>

							</div>
						</div>
					<?php endforeach; 


					# Show buttons to display the +1 features:

					$delete = new Form();

					$delete->open('form', "/users/delete_history", NULL, 'POST');
					?><br/>
						<button class="btn" type="submit">Delete full grunting history</button>
					
					<br/><br/>

					<div class='alert alert-error'>	
						<strong>Please be aware: there is no way to undo this action.</strong>
					</div>
					</form>

		<?php } # if(count($myposts) > 0)

		else{ ?>

			<div class="span5 oongabox">
				<h3>Your oongas</h3>
				No history yet
			</div>

		<?php	} ?>  <!--else -->

	
			</div>
		</div>
	</div>
</div>
