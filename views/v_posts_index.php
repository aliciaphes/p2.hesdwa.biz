<!-- This is the view where the user will see a list of oongas -->

<div class="container-fluid">

	<?php
	if(count($posts) > 0){

		foreach($posts as $post): ?>

		<div class="row-fluid">

			<div class="span4 offset3 post oongabox">
				
				<article>
					<h4 class='underline'><?=$post['first_name']?> <?=$post['last_name']?> posted:</h4>
					<i><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
						on <?= Time::display($post['created']) ?>:
					</time></i>
					<p><?=$post['content']?></p>
				</article>
			</div>
		</div>

		<?php endforeach;

	}else{ ?>

	<div class="span3 offset3 oongabox">
		
		<?php
			echo 'No cavemen to grunt with!';?><br/><br/>

			<?php

			$interact = new Form();
			$interact->open('form', "/posts/users", NULL, 'POST');
			?>
			<button class="btn" type="submit">Interact to see some food, er, feed</button>
			</form>

	</div>

		<?php } ?>

</div>
