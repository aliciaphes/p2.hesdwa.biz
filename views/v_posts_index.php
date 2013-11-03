<?php

if(count($posts) > 0){

	foreach($posts as $post): ?>

	<article>

		<h3><?=$post['first_name']?> <?=$post['last_name']?> posted:</h3>

		<p><?=$post['content']?></p>

		<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			<?=Time::display($post['created'])?>
		</time>

	</article>

<?php endforeach;
}else{
	echo 'no users to follow!';?>
	<!-- <button class="btn" type="submit" novalidate>Interact</button> -->
<?php }

?>