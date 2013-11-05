
<div class="container-fluid login">

	<?php
	if(count($posts) > 0){

		foreach($posts as $post): ?>

		<div class="row-fluid">

			<div class="span4 offset3 post" style="background-color:#004026; padding: 15px;">
				
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

	<div class="span3 offset3" style="background-color:#004026; padding: 15px;">
		<?php
		echo 'No cavemen to grunt with!';?></br></br>

		<?php

		$interact = new Form();

		$interact->open('form', "/posts/users", NULL, 'POST');
		?>
		<button class="btn" type="submit">Interact</button>
	</form>

</div>

<?php } ?>

</div>